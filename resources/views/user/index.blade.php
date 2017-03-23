@extends('layouts.base')

@section('title', '用户信息')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
@endsection