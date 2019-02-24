@extends('layouts.app')

@section('content')
</br>
  <h1> Korisnici </h1>
  @if(count($users) > 0)
  @foreach($users as $user)
      <div class ="card card-body bg-light"
           <h2><a href="/users/{{$user->email}}">{{$user->title}}</a></h2>
           <h3><strong style="color:red;">{{$user->name}}</strong> | {{$user->email}} | <strong style="color:red;">Id kornisnika =></strong>  {{$user->id}}
              {{Form::open(array('action' => ['UserController@destroy', $user->id])) }}
              @auth
              @if(Auth::user()->type == 'admin')
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Obriši', ['class' =>'btn btn-danger'])}}
             @endif
             @endauth
{!!Form::close()!!}
          
           </h3>
      </div>
  @endforeach
   </br>
  {{$users->links()}}
@else
  <p>Nema korisnika</p>
@endif
@endsection