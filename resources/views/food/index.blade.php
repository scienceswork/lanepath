@extends('layouts.base')

@section('title', '美食')

@section('body')
    <div class="row">
        <div class="col-md-12">
            {{--面包屑导航--}}
            {!! Breadcrumbs::render('food.index') !!}
        </div>
    </div>
@endsection