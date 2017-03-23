<div class="box xd-nav">
    <div class="padding-md">
        <div class="list-group text-center">
            <a href="{{ route('web.setting.index') }}" class="list-group-item {{ navbarRouteActive('web.user.show') }}">
                我的小道
            </a>
            <a href="{{ route('web.setting.avatar') }}" class="list-group-item {{ navbarRouteActive('web.setting.avatar') }}">
                我的游记
            </a>
            <a href="{{ route('web.setting.security') }}" class="list-group-item {{ navbarRouteActive('web.setting.security') }}">
                我的问答
            </a>
            <a href="{{ route('web.setting.domain') }}" class="list-group-item {{ navbarRouteActive('web.setting.domain') }}">
                我的足迹
            </a>
            <a href="#" class="list-group-item">
                我的读书
            </a>
        </div>
    </div>
</div>