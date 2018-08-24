@extends('layouts.app')

@section('content')
</br>
<h1>Edit post</h1>
{{Form::open(array('action' => ['PostController@update', $post->id])) }}
<div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>
    </div>
<div class="form-group">
        {!! Form::label('body', 'Body', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'rows' => 5, 'placeholder' => 'Body text']) !!}
        </div>
    </div>
    {{Form::hidden('_method', 'PUT')}}
    &ensp; &nbsp; {{Form::submit('Submit', ['class' =>'btn btn-dark'])}}
    {!! Form::close()  !!}
@endsection