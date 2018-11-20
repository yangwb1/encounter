<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 新手入门教程</title>
    {{--Laravel 在运行时，是以 public 文件夹为根目录的，因此我们可以使用下面这行代码来为 Laravel 引入样式--}}
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        {{--@include 是 Blade 提供的视图引用方法，可通过传参一个具体的文件路径名称来引用视图。--}}
        @include('layouts._footer')
    </div>
</div>
</body>
</html>
