{{--错误页面模板--}}
@if( $errors->any())
    <div class="alert alert-dismissable alert-danger errors">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
