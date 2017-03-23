@extends('layouts.base')

@section('title', '我的信息')

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
                        我的信息
                        <small>
                            资料完善度：80%
                        </small>
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('web.setting.infoStore') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">
                                昵称：
                            </label>
                            <div class="col-md-5">
                                <input name="name" type="text" class="form-control" placeholder="例如：胡同小道" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-md-2 control-label">
                                性别：
                            </label>
                            <div class="col-md-5">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="1" @if(Auth::user()->sex == 1) checked @endif> 男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="2" @if(Auth::user()->sex == 2) checked @endif> 女
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="0" @if(Auth::user()->sex == 0) checked @endif> 保密
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-2 control-label">
                                居住城市：
                            </label>
                            <div class="col-md-5">
                                <input name="city" type="text" class="form-control" placeholder="例如：杭州" value="{{ Auth::user()->city }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="intro" class="col-md-2 control-label">
                                个人简介：
                            </label>
                            <div class="col-md-5">
                                <textarea name="intro" class="form-control" placeholder="例：摄影师/旅居澳洲/潜水爱好者">{{ Auth::user()->intro }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-2">
                                <input type="submit" class="btn btn-primary" value="保存">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection