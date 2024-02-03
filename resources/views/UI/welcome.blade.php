@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-block div-title">
        <div class="col-lg-12">
            <img class="title-image" src="{{ asset('new/images/banner.png') }}" alt="Title Image">
        </div>
    </div>

    <div class="row d-flex div-bottom">
        <div class="col-lg-6"><img class="w-100" src="{{ asset('new/images/bottom_left.png') }}" alt="Image"></div>
        <div class="col-lg-6"> <img class="w-100" src="{{ asset('new/images/Bg 1 page.png') }}" alt="Image"></div>

    </div>
    <div class=" d-flex div-btn">
    <button class="btn btn-6"><a class="a-btn" href="{{route('user_details')}}">Next</a></button>
    </div>
</div>

@endsection