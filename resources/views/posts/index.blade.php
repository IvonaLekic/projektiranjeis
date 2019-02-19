@extends('layouts.app')

@section('content')
</br>
@auth
        @if(Auth::user()->type == 'admin' ||Auth::user()->type == 'normal_user')
            <h1> Recenzije</h1> <h5> <a href="/posts/create"> Napiši novu recenziju </a> </h5>
        @endif
@endauth
    @if(count($posts) > 0)
       @foreach($posts as $post)
           <div class ="card card-body bg-light"
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Datum pisanja {{$post->created_at}}</small>
           </div>

       @endforeach
        </br>
       {{$posts->links()}}
    @else
       <p>Trenutno nema recenzija.</p>
    @endif
@endsection