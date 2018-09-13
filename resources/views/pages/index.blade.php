@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
        <h1  style=" border-style: solid;
        border-width: 0px 0px 2px 0px;">F O T O l a n d</h1>
        <p>Brzo, lako i jednostavno. Dogovorite izradu fotografija ili mnoge druge nase usluge.</p>


        <p><a class="btn btn-primary btn-lg" href="/login" role="button"> Prijava </a>
           <a class="btn btn-success btn-lg" href="/register" role="button">Registracija</a></p>
        </div>
<div  class="jumbotron text-center">
        <h1  style=" border-style: solid;
        border-width: 0px 0px 2px 0px;">Izrada fotografija</h1>
        <br>
        <div > <img style="margin:auto; width:80%; height:380px; display:block" src="https://image.ibb.co/hyX5vU/slikaaa.jpg"></div>
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
                border-width: 0px 0px 2px 0px;">Bozicna iznenadenja</h1>
                <br>
                <div > <img style="margin:auto; width:80%; height:380px; display:block" src="https://image.ibb.co/j4NDFU/bozic.jpg"></div>
        </div>

<div class="jumbotron text-center">
                <h1  style=" border-style: solid;
                border-width: 0px 0px 2px 0px;">O stranici</h1>

                <br>
        
                <p>Ovu stranicu su radile Ivona Lekić i Martina Budimir. Stranica riješava problem naručivanja termina u foto-radnji.
                        <br>Korisnik se moze prijaviti i objaviti slike koje želi izraditi. 
                 </p>
        
                </div>
@endsection