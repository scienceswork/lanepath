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
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}"/>
    {{--样式表，倒入基础样式表--}}
    @section('stylesheet')
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @show
</head>
<body>
<div class="wrap">
    {{--导航--}}
    @include('layouts.partials.navbar')
    {{--内容区域--}}
    <div class="container" style="padding: 60px 10px 70px 10px;padding-bottom: 180px !important;">
        @include('flash.message')
        {{--判断邮箱是否激活--}}
        @if(Auth::check() && !Auth::user()->verified)
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                该邮箱未激活，请前往 {{ Auth::user()->email }} 查收激活邮件，激活后才能完整地使用胡同小道功能。如果未收到邮件，请前往 <a href="javascript:$('#send-verification-mail').submit();">重发邮件</a> 。
            </div>
            <form method="POST" id="send-verification-mail" action="{{ route('send-verification-mail') }}"
                  accept-charset="UTF-8">
                {!! csrf_field() !!}
            </form>
        @endif
        @yield('body')
    </div>
    {{--底部信息--}}
    @include('layouts.partials.footer')
    {{--JavaScript--}}
    @section('javascript')
        <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    @show
</div>
</body>
</html>