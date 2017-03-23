<?php
// 帮助函数
function navbarActive($route) {
    return Request::is($route . '*') ? 'active' : '';
}

/**
 * 传入路由名称，相符即返回active，否则返回空
 * @param $name
 * @return string
 */
function navbarRouteActive($name) {
    return Route::currentRouteName() == $name ? 'active' : '';
}

/**
 * 返回用户头像100*100px
 * @param $avatar string 头像的路径
 * @return string 头像的真实地址
 */
function avatar_100($avatar) {
    return config('app.cdn_url') . '/' . $avatar . '?imageView2/1/w/100/h/100/interlace/0/q/100';
}