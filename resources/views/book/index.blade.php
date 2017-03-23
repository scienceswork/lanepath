@extends('layouts.base')

@section('title', '读书')

@section('body')
    <div class="row">
        <div class="col-md-12">
            {!! Breadcrumbs::render('book.index') !!}
        </div>
    </div>
@endsection