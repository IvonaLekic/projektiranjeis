@extends('layouts.app')



@section('content')

</br>

<h1 style="border-style: solid;

border-width: 0px 0px 2px 0px; text-align:center">Usluge</h1>

<br>

 @if(count($services) > 0)

  <ul class="list-group">

        

              <li class="list-group-item" style="text-align:center">Fotografiranje</li>

              <li class="list-group-item" style="text-align:center">Snimanje</li>

              <li class="list-group-item" style="text-align:center">Izrada fotografija</li>

              <li class="list-group-item" style="text-align:center">Slikanje za dokumente</li>

              <li class="list-group-item" style="text-align:center">Kolaž fotografija</li>

              <li class="list-group-item" style="text-align:center">Popravak starih footoografija</li>

         

  </ul>       
 
 @endif

@endsection 