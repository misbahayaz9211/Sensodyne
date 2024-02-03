@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-block div-title">
        <div class="col-lg-12">
            <img class="title-image3" src="{{ asset('new/images/logo2.png') }}" alt="Title Image">
        </div>
    </div>
    <div class="row d-flex result-row">
      <h1 class = " phrase"> We have sent your beautiful smiling picture to your email </h1>

    </div>
    <div class="d-flex flex-column div-btn2">
    <button class="btn submit-btn2"><a class="a-btn" href="/">Start Over</a></button>
    </div>
    <div class="row d-flex div-bottom2">
        <img class="w-100" src="{{ asset('new/images/bottom_banner.png') }}" alt="Image">
    </div>
    

</div>

@endsection