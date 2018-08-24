@extends('layouts.app')

@section('content')
</br>
<h1>{{$post->title}}</h1>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
</br>
</br>
<a href="/posts" class="btn btn-dark">Go Back</a>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
{{Form::open(array('action' => ['PostController@destroy', $post->id])) }}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' =>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
