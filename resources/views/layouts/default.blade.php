<!doctype html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '我是默认参数')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
{{--引入头部--}}
@include('layouts._header')

<div class="container">
    @yield('content')
    {{--引入尾部--}}
    @include('layouts._footer')
</div>



</body>
</html>