@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
        <h1  style=" border-style: solid;
        border-width: 0px 0px 2px 0px;">F O T O L A N D</h1>
        <p>Brzo, lako i jednostavno. Dogovorite izradu fotografija ili mnoge druge nase usluge.</p>
        <h3>Ukoliko želite postaviti i izraditi svoje fotografije prijavite se!</h3>


        <p><a class="btn btn-primary btn-lg" href="/login" role="button"> Prijava </a>
           <a class="btn btn-success btn-lg" href="/register" role="button">Registracija</a></p>
        </div>
<div  class="jumbotron text-center">
        <h1  style=" border-style: solid;
        border-width: 0px 0px 2px 0px;">Izrada fotografija</h1>
        <br>
        <div > <img style="margin:auto; width:80%; height:380px; display:block" src=https://image.ibb.co/hyX5vU/slikaaa.jpg"></div>
</div>

<div  class="jumbotron text-center">
         <h1  style=" border-style: solid;
        border-width: 0px 0px 2px 0px;">Slikanje vjenčanja</h1>
        <br>
                <img class="mySlides" style="margin:auto; width:80%; height:380px; display:block" src="https://image.ibb.co/nsVWLU/prva_slide.jpg">
                <img class="mySlides" style="margin:auto; width:80%; height:380px; display:block" src="https://image.ibb.co/j7AgLU/druga_slide.jpg">
                <img class="mySlides" style="margin:auto; width:80%; height:380px; display:block" src="https://image.ibb.co/cMgGn9/cetvrta_slide.jpg">
                <img class="mySlides" style="margin:auto; width:80%; height:380px; display:block" src="https://image.ibb.co/dcay0U/treca_slide.jpg">
            
                        <script>
                                var slideIndex = 0;
                        carousel();

                        function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none"; 
                        }
                        slideIndex++;
                        if (slideIndex > x.length) {slideIndex = 1} 
                        x[slideIndex-1].style.display = "block"; 
                        setTimeout(carousel, 2000); // Change image every 2 seconds
                        }
                        </script>
      
</div>

<div  class="jumbotron text-center">
                <h1  style=" border-style: solid;
                border-width: 0px 0px 2px 0px;">Kolaž fotografija</h1>
                <br>
                <div > <img style="margin:auto; width:80%; height:380px; display:block" src="https://is4-ssl.mzstatic.com/image/thumb/Purple/v4/29/4a/f4/294af498-0d48-6417-93cc-4a3c476e6a57/mza_1180521636062022860.jpg/643x0w.jpg">
                        @auth
                        @if(Auth::user()->type == 'admin' ||Auth::user()->type == 'normal_user')
                        <h3>Ukoliko želite naručiti kolaž fotografija kliknite <a href="/image-gallery" > OVDJE </a>.</h3>
                        @endif
                        @endauth
                </div>
        </div>

<div class="jumbotron text-center">
                <h1  style=" border-style: solid;
                border-width: 0px 0px 2px 0px;">O stranici</h1>

                <br>
        
                <p>Ovu stranicu su radile Ivona Lekić, Martina Budimir i Adela Golić. Stranica riješava problem naručivanja termina u foto-radnji.
                        <br>Ukoliko želi napisati neku recenziju,korisnik se mora prijaviti.Korisnik može uređivati ili obrisati svoju recenziju,a druge može samo pogledati.
                        <br>Korisnik može učitati fotografije koje želi izraditi.
                        <br>Admin može vidjeti stranicu s korisnicima i obrisati bilo kojeg korisnika.Također admin može obrisati ili urediti bilo koju recenziju.
                 </p>
                 <br>
                @auth
                @if(Auth::user()->type == 'admin')
                 <a class="btn btn-success btn-lg" href="/users">Korisnici</a>
                @endif
                @endauth 
                 
                </div>
@endsection