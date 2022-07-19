@extends('system.layout')
@section('content')
<div class="container">
    <h4 style="text-transform: uppercase;margin-top:1rem;">Laravel File Manager</h4>
                  <a href="{{url('/images/create')}}" class="btn btn-success btn-sm" style="margin:20px;">Add New Image</a>
                    <div class="row">
                    @foreach($images as $image)
    <div class="col-4">
    <div class="card bg-dark text-white">
  <img  src="{{asset($image->photo)}}" class="card-img" alt="...">
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