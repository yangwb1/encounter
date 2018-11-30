@extends('layouts.default')
@section('title', $user->name . ' 的个人中心')
@section('content')
<div class="row">
  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="panel panel-default">
      <div class="panel-body">
          <div class="media">
        <section class="user_info">
          {{--@include('shared._user_info', ['user' => $user])--}}
            <div align="center">
                <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="300px" height="300px">
            </div>
        </section>
              <section class="stats">
                  @include('shared._stats', ['user' => $user])
              </section>
              <div class="media-body">
                  <hr>
                  <h4><strong>个人简介</strong></h4>
                  <p>{{ $user->introduction }}</p>
                  <hr>
                  <h4><strong>注册于</strong></h4>
                  <p>{{ $user->created_at->diffForHumans() }}</p>
              </div>

      </div>
    </div>
    </div>
  </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                </span>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
      @if (Auth::check())
        @include('users._follow_form')
      @endif

      @if (count($statuses) > 0)
        <ol class="statuses">
          @foreach ($statuses as $status)
            @include('statuses._status')
          @endforeach
        </ol>
              {!! $statuses->render() !!}
          @endif

    </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                {{-- 用户发布的话题内容 --}}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="{{ active_class(if_query('tab', null)) }}">
                                <a href="{{ route('users.show', $user->id) }}">Ta 的话题</a>
                            </li>
                            <li class="{{ active_class(if_query('tab', 'replies')) }}">
                                <a href="{{ route('users.show', [$user->id, 'tab' => 'replies']) }}">Ta 的回复</a>
                            </li>
                        </ul>
                        @if (if_query('tab', 'replies'))
                            @include('users._replies', ['replies' => $user->replies()->with('topic')->recent()->paginate(5)])
                        @else
                            @include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop