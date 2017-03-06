@extends('layouts.base')

@section('title', '关于我们')

@section('body')
    <div class="row">
        <div class="col-md-12">
            {!! Breadcrumbs::render('page.about') !!}
        </div>
        <div class="col-md-3">
            <ul class="nav nav-primary nav-stacked nav-white">
                <li class="active">
                    <a href="###">首页 </a>
                </li>
                <li>
                    <a href="###">动态 <span class="label label-badge label-success pull-right">4</span></a>
                </li>
                <li>
                    <a href="###">项目 </a>
                </li>
                <li>
                    <a href="###">更多 </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            9
        </div>
    </div>
@endsection