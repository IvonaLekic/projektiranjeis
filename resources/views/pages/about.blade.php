@extends('layouts.app')

@section('content')
<br>


<input type="file" name="files[]" multiple="multiple" />

<form class="form-group" method="post" enctype="multipart/form-data" name="formUploadFile">      
    <label>Select files to upload:</label>
    <input type="file" name="files[]" multiple="multiple" />
    <input type="submit" value="Upload File" name="btnSubmit"/>
</form>

foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
    $temp = $_FILES["files"]["tmp_name"][$key];
    $name = $_FILES["files"]["name"][$key];
     
    if(empty($temp))
    {
        break;
    }
     
    move_uploaded_file($temp,"UploadFolder/".$name);
}
@endsection