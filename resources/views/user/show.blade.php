@extends('layouts.base')

@section('title', $user->name)

@section('body')
    <div class="row">
        <div class="col-md-3">
            <div class="box">
                <div class="media">
                    <div class="media-left">
                        <img src="{{ avatar_100($user->avatar) }}"
                             alt="123"
                             class="img-circle border-eee">
                    </div>
                    <div class="media-body">
                        {{ $user->name }}
                    </div>
                </div>
            </div>
            <!-- 导航 -->
            @include('user.partials._navbar')
            <!-- 留言板 -->
            @include('user.partials._message')
        </div>
        <div class="col-md-9">
            <div class="box text-center">
                {{ $user->intro }}
            </div>
        </div>
    </div>
@endsection