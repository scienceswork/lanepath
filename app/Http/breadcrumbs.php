<?php

// 首页
Breadcrumbs::register('home', function ($breadcrumbs) {
   $breadcrumbs->push('首页', route('home'));
});

// 首页 > 登录
Breadcrumbs::register('login', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('登录', route('login'));
});

// 首页 > 注册
Breadcrumbs::register('register', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('注册', route('register'));
});

// 首页 > 作品
Breadcrumbs::register('video.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('作品', route('web.video.index'));
});

// 首页 > 关于我们
Breadcrumbs::register('page.about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('关于我们', route('web.page.about'));
});

// 首页 > 美食
Breadcrumbs::register('food.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('美食', route('web.food.index'));
});

// 首页 > 读书
Breadcrumbs::register('book.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('读书', route('web.book.index'));
});

// 首页 > 旅游
Breadcrumbs::register('tourism.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('旅游', route('web.tourism.index'));
});

