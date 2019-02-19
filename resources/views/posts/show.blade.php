@extends('layouts.app')

@section('content')
</br>
<h1>{{$post->title}}</h1>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Datum pisanja {{$post->created_at}}</small>
</br>
</br>
<a href="/posts" class="btn btn-dark">Nazad</a>
<hr>
@auth
@if( $post->user_id == $currentuserid = Auth::user()->id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Uredi</a>
@endif
@endauth

{{Form::open(array('action' => ['PostController@destroy', $post->id])) }}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Izbriši', ['class' =>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
