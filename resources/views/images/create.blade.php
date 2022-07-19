@extends('system.layout')
@section('content')
<div class="card" style="margin:20px">

<div class="card-header" >
  <strong style="text-transform: uppercase;">  Create new Image</strong>

    <a href="{{url('/images')}}" class="btn btn-success btn-sm float-end" >Return</a>
</div>

<div class="card-body">
    <form action="{{url('images')}}" method="post" enctype="multipart/form-data">
{!! csrf_field() !!}
<ion-label>Name</ion-label> <br>
<input type="text" name="name" id="name" class="form-control" required> <br>
<ion-label>Photo</ion-label> <br>
<input type="file" name="photo" id="photo" class="form-control" required> <br>

<input type="submit" value="Save Image" class="btn btn-success">
    </form>
</div>
</div>
@endsection