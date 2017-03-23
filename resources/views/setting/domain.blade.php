@extends('layouts.base')

@section('title', '我的小道')

@section('body')
    <div class="row">
        <div class="col-md-3">
            <!-- 导航 -->
            @include('setting.partials._navbar')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        我的小道
                    </h3>
                </div>
                <div class="panel-body">
                    <p>我的主页：www.lanepath.com/u/123.html</p>
                </div>
            </div>
        </div>
    </div>
@endsection