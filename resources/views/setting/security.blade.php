@extends('layouts.base')

@section('title', '账户安全')

@section('body')
    <div class="row">
        <div class="col-md-3">
            <!-- 导航 -->
            @include('setting.partials._navbar')
        </div>
        <div class="col-md-9">
            <!-- 修改账户密码 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        账户安全
                        <small>
                            资料完善度：80%
                        </small>
                    </h3>
                </div>
                <div class="panel-body">
                    <!-- 错误提示信息 -->
                    @include('flash.error')
                    <form action="{{ route('web.setting.securityStore') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">
                                原密码：
                            </label>
                            <div class="col-md-6">
                                <input name="password" type="password" class="form-control" placeholder="请输入原密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new_password" class="col-md-2 control-label">
                                密码：
                            </label>
                            <div class="col-md-6">
                                <input name="new_password" type="password" class="form-control" placeholder="请输入新密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation" class="col-md-2 control-label">
                                确认密码：
                            </label>
                            <div class="col-md-6">
                                <input name="new_password_confirmation" type="password" class="form-control" placeholder="请再次输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <input type="submit" class="btn btn-primary" value="确认修改">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection