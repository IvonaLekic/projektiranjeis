


@extends('layouts.app')

@section('content')
</br>
<h1>{{$user->title}}</h1>
<div>
    {!!$user->body!!}
</div>
<hr>
<small>{{$user->email}}</small>

</br>
</br>
<a href="/users" class="btn btn-dark">Korisnici</a>
<hr>
{{Form::open(array('action' => ['UserController@destroy', $user->id])) }}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Obriši', ['class' =>'btn btn-danger'])}}
                
{!!Form::close()!!}
@endsection
