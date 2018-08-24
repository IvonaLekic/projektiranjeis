@if(!$errors->isEmpty())
    @foreach($errors->all() as $error)
          <div class="alert alert-danger">
               {{$error}}
          </div>
    @endforeach
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

@if(session('error'))
   <div class="alert alert-danger">
        {{session('error')}}
   </div>
@endif
	