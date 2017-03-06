<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{--网页标题--}}
        @section('title')带你足不出户观世界@show - 胡同小道
    </title>
    {{--样式表，倒入基础样式表--}}
    @section('stylesheet')
        <link rel="stylesheet" href="{{ asset('lib/zui/css/zui.min.css') }}">
    @show
</head>
<body>
{{--导航--}}
@include('layouts.partials.navbar')
{{--内容区域--}}
<div class="container">
</div>
@yield('body')
{{--JavaScript--}}
@section('javascript')
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/zui/js/zui.min.js') }}"></script>
@show
</body>
</html>