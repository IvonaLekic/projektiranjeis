@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<div  class="jumbotron text-center">
    <h1  style=" border-style: solid;
    border-width: 0px 0px 2px 0px;">Kako poslati fotografije za izradu?</h1>
    <br>
    <p> Ukoliko želite učitati fotografije, stisnite na dugme <strong>"Želim prostor za izradu" </strong>, te nam pošaljite mail. <br> 
        Ubrzo ćete na  svoj mail dobiti link na koji možete postaviti željene fotografije.</p>
    <a href="mailto:fotoland.izrada@gmail.com?subject=Izrada fotografija&body=Molim Vas prostor za postavljanje fotografija koje želim izraditi.%0DHvala" class="btn btn-dark">Želim prostor za izradu.</a>
     <br><br>          
     <p>Ako pak želite da vam <strong>pošaljemo</strong> izrađene fotografije napišite nam i svoju adresu, </br>
        te će vam fotografije biti dostavljene brzom poštom.</p>
     <br><br>
     
    </div>
</html>
@endsection
