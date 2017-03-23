@extends('layouts.base')

@section('title', '关于我们')

@section('body')
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked setting-nav text-center">
                <li role="presentation" class="{{ navbarRouteActive('web.setting.index') }}">
                    <a href="{{ route('web.setting.index') }}">
                        <i class="glyphicon glyphicon-user"></i>&nbsp;
                        我的信息
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="#">
                        <i class="glyphicon glyphicon-picture"></i>&nbsp;
                        我的头像
                    </a>
                </li>
                <li role="presentation" class="{{ navbarRouteActive('web.setting.security') }}">
                    <a href="{{ route('web.setting.security') }}">
                        <i class="glyphicon glyphicon-lock"></i>&nbsp;
                        账号安全
                    </a>
                </li>
                <li role="presentation" class="{{ navbarRouteActive('web.setting.domain') }}">
                    <a href="{{ route('web.setting.domain') }}">
                        <i class="glyphicon glyphicon-home"></i>&nbsp;
                        我的小道
                    </a>
                </li>
                <li role="presentation">
                    <a href="#">
                        <i class="glyphicon glyphicon-send"></i>&nbsp;
                        旅行足迹
                    </a>
                </li>
                <li role="presentation">
                    <a href="#">
                        <i class="glyphicon glyphicon-book"></i>&nbsp;
                        读书杂烩
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            9
        </div>
    </div>
@endsection