<?php
// 帮助函数
function navbarActive($route) {
    return Request::is($route . '*') ? 'active' : '';
}