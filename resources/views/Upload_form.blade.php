@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<div  class="jumbotron text-center">
    <h1  style=" border-style: solid;
    border-width: 0px 0px 2px 0px;">Kako poslati fotografije za izradu?</h1>
    <br>
    <p> Ukoliko želite poslati fotografije, stisnite na dugme "Želim prostor za izradu" <br> i uskoro ćete dobiti prostor na koji možete postaviti željene fotografije za izradu.</p>
    <a href="mailto:fotoland.izrada@gmail.com?subject=Izrada fotografija&body=Molim Vas prostor za postavljanje fotografija koje želim izraditi.%0DHvala" class="btn btn-dark">Želim prostor za izradu.</a>
     <br><br>          
     <p>Ukoliko želite da vam pošaljemo izrađene fotografije napišite nam i adresu, te će vam fotografije biti dostavljene brzom poštom.</p>
     <br><br>
    </div>
</html>
@endsection
