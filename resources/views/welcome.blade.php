<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello world!</title>
    <!-- zui -->
    <link href="{{ asset('lib/zui/css/zui.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div id="navbar-main" class="navbar-collapse collapse">
        <ul class="nav navbar-nav nav-center">
            <li class="nav-sy"><a href="/">首页</a></li>
            <li class="dropdown nav-js">
                <a id="themes" href="/users" data-toggle="dropdown" class="dropdown-toggle">产品介绍<i class="icon-angle-down"></i></a>
                <ul aria-labelledby="themes" class="dropdown-menu">
                    <li><a href="/about">关于八爪鱼</a></li>
                    <li><a href="/users">版本介绍</a></li>
                    <li><a href="/case">项目案例</a></li>
                    <li><a href="/HonorWall">荣誉墙</a></li>
                </ul>
            </li>
            <li>
                <a href="/tutorials" target="_blank">教程中心</a>
            </li>
            <li class="nav-xz">
                <a href="/download">软件下载</a>
            </li>
            <li class="nav-gm">
                <a class="" href="/plan">购买</a>
            </li>
            <li class="nav-sc">
                <a target="_blank" href="http://www.dataduoduo.com/Rule/c/u/010/q" title="八爪鱼规则市场">规则市场</a>
                <span class="label-danger label-danger-esp"></span>
            </li>
            <li>
                <a target="_blank" href="http://bbs.bazhuayu.com">论坛</a>
            </li>
            <li>
                <a target="_blank" href="http://www.dataduoduo.com?bzy=home">数据市场</a>
            </li>
            <li>
                <a href="/agent.aspx">代理</a>
                <span class="label-danger"></span>
            </li>
        </ul>
        <ul id="cp_body_LoginStatus_2_Panel1" class="nav navbar-nav navbar-right">
            <li><a href="/login.aspx">登录</a></li>
            <li class="s"><a href="javascript:;" style="padding:13px 0;">|</a></li>
            <li><a class="sigin" href="/signup.aspx"><span>注册</span></a></li>
        </ul>

    </div>
</div>
<!-- 在此处编码你的创意 -->

<!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<!-- ZUI Javascript组件 -->
<script src="{{ asset('lib/zui/js/zui.min.js') }}"></script>
</body>
</html>