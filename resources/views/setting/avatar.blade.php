@extends('layouts.base')

@section('title', '修改头像')

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
                        我的头像
                        <small>
                            资料完善度：80%
                        </small>
                    </h3>
                </div>
                <div class="panel-body">
                    <!-- 错误页面 -->
                    @include('flash.error')
                    <p>
                        请选择头像：
                    </p>
                    <img class="img-thumbnail"
                         style="margin-bottom: 10px;"
                         src="{{ avatar_100(Auth::user()->avatar) }}"
                         alt="{{ Auth::user()->name }}">
                    <form action="{{ route('web.setting.avatarStore') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" name="avatar">
                        </div>
                        <button type="submit" class="btn btn-primary">上传头像</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection