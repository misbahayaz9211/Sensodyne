@extends('layouts.app')
@section('content')
<div class="container">
<form id="myForm" method="POST" action="{{ route('webcam.capture') }}">
    @csrf
    <div class="camera" id="my_camera"></div>
    <div id="loader" style="display: none;"><div class="timer">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 300 300" preserveAspectRatio="none" style="width:300; height:300; top:0; left:0;">
    <circle cx="100" cy="100" r="57" id="pink-halo" fill="none" stroke="#fd256e" stroke-width="10" stroke-dasharray="0, 361" transform="rotate(-90,100,100)" />
    <text id="myTimer" text-anchor="middle" x="100" y="110" style="font-size: 40px; fill:#343434;"></text>
</svg>

</div></div>
    <div id="results"></div>
    <div class="d-flex flex-column div-btn">
        <div class="form-group"></div>
        <input type="button" onClick="captureAndSubmit()" value="Get Ready" class="btn btn-6">
        <input type="hidden" name="image" class="image-tag">
    </div>
    <div class="row d-flex div-bottom">
        <img class="w-100" src="{{ asset('new/images/bottom_banner.png') }}" alt="Image">
    </div>
    <button class="btn btn-success" id="submitButton" style="display: none;">Submit</button>
</form>

</div>

@endsection