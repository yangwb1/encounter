@extends('layouts.default')

@section('title', $topic->title)
@section('description', $topic->excerpt)

@section('content')

    <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        作者：{{ $topic->user->name }}
                    </div>
                    <hr>
                    <div class="media">
                        <div align="center">
                            <a href="{{ route('users.show', $topic->user->id) }}">
                                <img class="thumbnail img-responsive" src="{{ $topic->user->avatar }}" width="300px" height="300px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">
                        {{ $topic->title }}
                    </h1>

                    <div class="article-meta text-center">
                        {{ $topic->created_at->diffForHumans() }}
                        ⋅
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                        {{ $topic->reply_count }}
                    </div>

                    <div class="topic-body">
                        {!! $topic->body !!}

                        <br>


                            <div class="col-md-1 col-md-offset-8">
                        <div class="buttons">
                            @if($favored)
                                <button class="btn btn-danger btn-disfavor">取消收藏</button>
                            @else
                                <button class="btn btn-success btn-favor">❤ 收藏</button>
                            @endif
                        </div>
                            </div>
                    </div>

                    @can('update', $topic)
                        <div class="operate">
                            <hr>
                            <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </a>

                            <form action="{{ route('topics.destroy', $topic->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-default btn-xs pull-left" style="margin-left: 6px">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    删除
                                </button>
                            </form>
                        </div>
                    @endcan

                </div>
            </div>
            {{-- 用户回复列表 --}}
            <div class="panel panel-default topic-reply">
                <div class="panel-body">
                    @includeWhen(Auth::check(), 'topics._reply_box', ['topic' => $topic])
                    @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->get()])
                </div>
            </div>
        </div>
    </div>
@stop

@section('scriptsAfterJs')
    <script>
        $(document).ready(function () {

            $('.btn-favor').click(function () {
                axios.post('{{ route('topics.favor', ['topic' => $topic->id]) }}')
                    .then(function () {
                        swal('操作成功', '', 'success')
                            .then(function () {  // 这里加了一个 then() 方法
                                location.reload();
                            });
                    }, function(error) {
                        if (error.response && error.response.status === 401) {
                            swal('请先登录', '', 'error');
                        }  else if (error.response && error.response.data.msg) {
                            swal(error.response.data.msg, '', 'error');
                        }  else {
                            swal('系统错误', '', 'error');
                        }
                    });
            });

            $('.btn-disfavor').click(function () {
                axios.delete('{{ route('topics.disfavor', ['topic' => $topic->id]) }}')
                    .then(function () {
                        swal('操作成功', '', 'success')
                            .then(function () {
                                location.reload();
                            });
                    });
            });

        })
    </script>
@endsection