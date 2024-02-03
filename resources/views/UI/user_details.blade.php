@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-block div-title">
        <div class="col-lg-12">
            <img class="title-image" src="{{ asset('new/images/banner.png') }}" alt="Title Image">
        </div>
    </div>
    <div class="row d-flex div-btn">
        <button class="btn btn-text">Please Enter Your Details</button>
    </div>
    <div class=" d-flex flex-column div-btn">
       
            <div class="form-group">
            <label class="label" for="">Name</label>
            <input type="text" name="name">
            </div>
            <div class="form-group my-5">
            <label class="label" for="">Email</label>
            <input type="email" name="email">
            </div>
            <button class="btn submit-btn"><a class="a-btn" href="{{route('screen')}}">Submit</a></button>
        
    </div>
    <div class="row d-flex div-bottom">
      <img class="w-100" src="{{ asset('new/images/bottom_banner.png') }}" alt="Image">

    </div>
    
</div>

@endsection