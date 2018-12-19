<div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">我的收藏</div>
                <div class="panel-body">
                    <div class="row products-list">
                        @foreach($topics as $topic)
                            <div class="col-xs-3 product-item">
                                <div class="product-content">
                                    <div class="top">


                                        dd( <a href="{{ route('topics.favorites', ['topic' => $topic->id]) }}">{{ $topic->title }}</a>)
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--<div class="pull-right">{{ $topics->render() }}</div>--}}
                </div>
            </div>
</div>

