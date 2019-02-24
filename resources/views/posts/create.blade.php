@extends('layouts.app')
@section('content')
</br>
<h1>Napiši recenziju</h1>
{{Form::open(array('action' => 'PostController@store')) }}
<div class="form-group">
        {!! Form::label('title', 'Ime:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'IME']) !!}
        </div>
    </div>
<div class="form-group">
        {!! Form::label('body', 'Tekst recenzije', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::textarea('body', $value = null, ['id' => 'article-ckeditor', 'class' => 'form-control', 'rows' => 5, 'placeholder' => 'Body text']) !!}
        </div>
    </div>
    &ensp; &nbsp; {{Form::submit('Potvrdi', ['class' =>'btn btn-dark'])}}
    {!! Form::close()  !!}
@endsection