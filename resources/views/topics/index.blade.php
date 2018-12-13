@extends('layouts.default')

@section('title', isset($category) ? $category->name : '话题列表')


@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-2 col-sm-4 sidebar" id="topic_sidebar" style="float: right;position: fixed;" >
            @include('topics._sidebar')
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 topic-list">
            @if (isset($category))
                <div class="alert alert-info" role="alert">
                    {{ $category->name }} ：{{ $category->description }}
                </div>
            @endif
            <div class="panel panel-default">

                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li class="{{ active_class( ! if_query('order', 'recent') ) }}"><a href="{{ Request::url() }}?order=default">最后回复</a></li>
                        <li class="{{ active_class(if_query('order', 'recent')) }}"><a href="{{ Request::url() }}?order=recent">最新发布</a></li>
                    </ul>
                </div>

                <div class="panel-body">
                    {{-- 话题列表 --}}
                    @include('topics._topic_list', ['topics' => $topics])
                    {{-- 分页 --}}
                    {!! $topics->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/jquery.js') }}"></script>
<script>
    var jwindow = $(window);
    jwindow.scroll(function () {
       var scrollHeight = jwindow.scrollTop();
       var screenHeight = jwindow.height();
       var sideHeight = $('#topic_sidebar').height();
       if (scrollHeight+screenHeight>sideHeight){
           $('topic_sidebar').css({
              'position':'fixed',
              'top':-(sideHeight-screenHeight),
              'right':0
           });
       } else{
           $('#topic_sidebar').css({
               'position':'static'
           });
       }
    });
        window.onload = function () {
            jwindow.trigger('scroll');
        };
        jwindow.resize(function () {
            jwindow.trigger('scroll');
        });

</script>
    @stop