@extends('blog::main-page')
@section('page')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Blog Post</h1>
            <hr>
            {!! Form::open(array('route' => 'web_blog_store')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
            {{ Form::label('body', 'Description:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
