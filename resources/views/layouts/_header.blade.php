<header class="clearfix">

            <button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        <nav class="navbar navbar-default navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-fade" role="navigation" id="js-bootstrap-offcanvas">

            <div class="container-fluid">

                <div class="navbar-header">




                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">

                        <span class="sr-only">Toggle navigation</span>

                        <i class="glyphicon glyphicon-remove"></i>

                    </button>

                </div>


                <div>
                    <a class="navbar-brand" href="/" id="logo">encounter</a>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">微博</a></li>

                        <li class="{{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}">文章</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                分享 <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show', 1) }}">分享</a></li>
                        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show', 2) }}">教程</a></li>
                        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show', 3) }}">问答</a></li>
                        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}"><a href="{{ route('categories.show', 4) }}">公告</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ route('products.index') }}">商品</a></li>
                    </ul>



                    <ul class="nav navbar-nav navbar-right">
                        {{--@if (Auth::check())--}}
                        @guest
                            <li><a href="{{ route('help') }}">帮助</a></li>
                            <li><a href="{{ route('login') }}">登录</a></li>
                            {{--<li><a href="{{ route('store') }}">注册</a></li>--}}

                        @else
                            <li>
                                <a href="{{ route('topics.create') }}">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </a>
                            </li>
                            {{-- 消息通知标记 --}}
                            <li>
                                <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
                            <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒">
                                {{ Auth::user()->notification_count }}
                            </span>
                                </a>
                            </li>
                            <li><a href="{{ route('users.index') }}">用户列表</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    {{--                {{ Auth::user()->name }} <b class="caret"></b>--}}
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('users.show', Auth::user()->id) }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            个人中心</a>
                                    </li>
                                    <li><a href="{{ route('users.edit', Auth::user()->id) }}">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>编辑资料</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a id="logout" href="#">
                                            <form action="{{ route('logout') }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-block btn-danger" type="submit" name="button">
                                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>退出</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

                    {{--<div class="column navbar-right">--}}
                        {{--<div id="sb-search" class="sb-search">--}}
                            {{--<form>--}}
                                {{--<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">--}}
                                {{--<input class="sb-search-submit" type="submit" value="">--}}
                                {{--<span class="sb-icon-search"></span>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

            </div>

        </nav>





</header>

{{--<header class="navbar navbar-fixed-top navbar-inverse">--}}
  {{--<div class="container">--}}
    {{--<div class="col-md-offset-1 col-md-10">--}}
      {{--<a href="/" id="logo">encounter</a>--}}
        {{--<!-- Left Side Of Navbar -->--}}
        {{--<ul class="nav navbar-nav navbar-left">--}}
            {{--<li>--}}
                {{--<a href="{{ route('home') }}">--}}
                    {{--微博</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}">话题</a></li>--}}
            {{--<li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show', 1) }}">分享</a></li>--}}
            {{--<li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show', 2) }}">教程</a></li>--}}
            {{--<li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show', 3) }}">问答</a></li>--}}
            {{--<li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}"><a href="{{ route('categories.show', 4) }}">公告</a></li>--}}
        {{--</ul>--}}
      {{--<nav>--}}
        {{--<ul class="nav navbar-nav navbar-right">--}}




          {{--@if (Auth::check())--}}


            {{--@guest--}}
                {{--<li><a href="{{ route('help') }}">帮助</a></li>--}}
                {{--<li><a href="{{ route('login') }}">登录</a></li>--}}
                {{--<li><a href="{{ route('store') }}">注册</a></li>--}}

            {{--@else--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('topics.create') }}">--}}
                            {{--<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{-- 消息通知标记 --}}
                {{--<li>--}}
                    {{--<a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">--}}
                            {{--<span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒">--}}
                                {{--{{ Auth::user()->notification_count }}--}}
                            {{--</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ route('users.index') }}">用户列表</a></li>--}}

            {{--<li class="dropdown">--}}
              {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                {{--<span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">--}}
                                {{--<img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">--}}
                            {{--</span>--}}
                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                {{ Auth::user()->name }} <b class="caret"></b>--}}
              {{--</a>--}}
              {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li>--}}
                    {{--<a href="{{ route('users.show', Auth::user()->id) }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>--}}
                        {{--个人中心</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ route('users.edit', Auth::user()->id) }}">--}}
                        {{--<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>编辑资料</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li>--}}
                  {{--<a id="logout" href="#">--}}
                    {{--<form action="{{ route('logout') }}" method="POST">--}}
                      {{--{{ csrf_field() }}--}}
                      {{--{{ method_field('DELETE') }}--}}
                      {{--<button class="btn btn-block btn-danger" type="submit" name="button">--}}
                          {{--<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>退出</button>--}}
                    {{--</form>--}}
                  {{--</a>--}}
                {{--</li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--@endguest--}}
        {{--</ul>--}}
      {{--</nav>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</header>--}}