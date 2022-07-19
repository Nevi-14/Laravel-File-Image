@extends('system.layout')
@section('content')
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="display:flex;justify-content:center;align-items:center">
      <img src="{{asset('storage/code.svg')}}" alt="" width="40" height="40" class="d-inline-block align-text-top">
    <span style="margin:0.5rem;text-transform:uppercase">Laravel File Manager</span>
      
    </a>
    <a href="{{url('/images')}}" class="btn btn-success btn-sm" style="margin:20px;">Return</a>
  </div>
</nav>

<div class="card" style="margin:20px">



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