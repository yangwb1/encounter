<a href="{{ route('users.show',$user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>

{{--$user->gravatar('140');为 gravatar 指定尺寸大小来获取头像：--}}