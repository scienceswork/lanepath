<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{--网页标题--}}
        胡同小道 - @section('title')带你足不出户观世界@show
    </title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}"/>
    {{--样式表，倒入基础样式表--}}
    @section('stylesheet')
        <link rel="stylesheet" href="{{ asset('lib/zui/css/zui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @show
</head>
<body>
<div class="wrap">
    {{--导航--}}
    @include('layouts.partials.navbar')
    {{--内容区域--}}
    <div class="container" style="padding: 70px 10px 0;padding-bottom: 180px !important;">
        @yield('body')
    </div>
    {{--底部信息--}}
    @include('layouts.partials.footer')
    {{--JavaScript--}}
    @section('javascript')
        <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/zui/js/zui.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    @show
</div>
</body>
</html>