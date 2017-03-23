{{--导航--}}
<header class="navbar navbar-default navbar-fixed-top navbar-white">
    <div class="container">
        <!-- 导航头部 -->
        <div class="navbar-header">
            <!-- 移动设备上的导航切换按钮 -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-lanepath">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- 品牌名 -->
            <a href="/" class="navbar-brand">胡同小道</a>
        </div>
        <!-- 导航项目 -->
        <div class="collapse navbar-collapse navbar-collapse-lanepath">
            <!-- 一般导航项目 -->
            <ul class="nav navbar-nav">
                <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a href="/">首页</a>
                </li>
                <li class="{{ navbarActive('video') }}">
                    <a href="{{ route('web.video.index') }}">作品</a>
                </li>
                <li class="{{ navbarActive('food') }}">
                    <a href="{{ route('web.food.index') }}">美食</a>
                </li>
                <li class="{{ navbarActive('tourism') }}">
                    <a href="{{ route('web.tourism.index') }}">旅游</a>
                </li>
                <li class="{{ navbarActive('book') }}">
                    <a href="{{ route('web.book.index') }}">读书</a>
                </li>
                <li class="{{ navbarActive('about') }}">
                    <a href="{{ route('web.page.about') }}">关于我们</a>
                </li>
            </ul>
            <!-- 搜索 -->
            <form action="#" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                {{--判断是否登录--}}
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#"
                           class="dropdown-toggle"
                           data-toggle="dropdown"
                           role="button"
                           aria-haspopup="true"
                           style="height: 50px;">
                            <img src="{{ avatar_100(Auth::user()->avatar) }}"
                                 alt="{{ Auth::user()->name }}"
                                 class="nav-avatar">
                            {{ Auth::user()->name }}
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('web.user.show', Auth::id()) }}">
                                    <i class="glyphicon glyphicon-road"></i>
                                    我的小道
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('web.setting.index') }}">
                                    <i class="glyphicon glyphicon-cog"></i>
                                    设置
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="javascript:;" id="logout-btn">
                                    <i class="glyphicon glyphicon-log-out"></i>
                                    退出登录
                                </a>
                            </li>
                            <!-- 退出登录 -->
                            <form action="{{ route('logout') }}" id="logout-form" method="post">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                @else
                    <!-- 注册/登录 -->
                    <li>
                        <a href="{{ route('login') }}">
                            <i class="icon icon-user"></i>
                            登录
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <i class="icon icon-pencil"></i>
                            注册
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>