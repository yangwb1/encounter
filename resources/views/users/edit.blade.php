@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
    <div class="container">
<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5><i class="glyphicon glyphicon-edit"></i> 编辑个人资料</h5>
    </div>
      <div class="panel-body">

        @include('shared._errors')

        {{--<div class="gravatar_edit">--}}
          {{--<a href="http://gravatar.com/emails" target="_blank">--}}
            {{--<img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>--}}
          {{--</a>--}}
        {{--</div>--}}

        <form method="POST" action="{{ route('users.update', $user->id )}}" accept-charset="UTF-8" enctype="multipart/form-data">


            {{ method_field('PATCH') }}
            {{ csrf_field() }}


            <div class="form-group">
              <label for="name">用户名：</label>
              <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
              <label for="email">邮箱：</label>
              <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
            </div>

            <div class="form-group">
              <label for="password">密码：</label>
              <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>

            <div class="form-group">
              <label for="password_confirmation">确认密码：</label>
              <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            </div>

            <div class="form-group">
                <label for="introduction-field">个人简介</label>
                <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
            </div>

            <div class="form-group">
                <label for="" class="avatar-label">用户头像</label>
                <input type="file" name="avatar">

                @if($user->avatar)
                    <br>
                    <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
                @endif
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
  </div>
</div>
    </div>
@stop