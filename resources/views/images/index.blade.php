@extends('system.layout')
@section('content')
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="display:flex;justify-content:center;align-items:center">
      <img src="{{asset('storage/code.svg')}}" alt="" width="40" height="40" class="d-inline-block align-text-top">
    <span style="margin:0.5rem;text-transform:uppercase">Laravel File Manager</span>
      
    </a>
    <a href="{{url('/images/create')}}" class="btn btn-success btn-sm" style="margin:20px;">Add New Image</a>
  </div>
</nav>
<div class="container">

                    <div class="row">
                    @foreach($images as $image)
    <div class="col-12 col-md-4" style="margin-bottom:1rem;">
    <div class="card bg-dark text-white" >
  <img style="object-fit: cover;height:200px"  src="{{asset($image->photo)}}" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">{{$image->name}}</h5>
    <p class="card-text"> 
    <a  class="btn btn-danger btn-sm" >Delete {{$loop->iteration}}</a> </p>
  </div>
</div>
    </div>
    @endforeach

                    </div>
                  </div>
@endsection