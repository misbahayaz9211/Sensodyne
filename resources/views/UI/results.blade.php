@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-block div-title">
        <div class="col-lg-12">
            <img class="title-image2" src="{{ asset('new/images/logo2.png') }}" alt="Title Image">
        </div>
    </div>
    <div class="row d-flex result-row">
        <div class="col-lg-6 border"><h1 class="h1">Before</h1>
        <img class="w-100 results-img" src="http://kcs-staging.uaenorth.cloudapp.azure.com:8000/image/{{ $apiResponse['images']['before'] }}" alt="Image">
        </div>
        <div class="col-lg-6 border"><h1 class="h1">After</h1>
        <img class="w-100 results-img" src="http://kcs-staging.uaenorth.cloudapp.azure.com:8000/image/{{ $apiResponse['images']['after'] }}" alt="Image">
        </div>

    </div>
    <div class="d-flex flex-column div-btn2">
    <button class="btn submit-btn"><a class="a-btn" href="{{route('proceed')}}">Proceed</a></button>
    </div>
    <div class="row d-flex div-bottom2">
        <img class="w-100" src="{{ asset('new/images/bottom_banner.png') }}" alt="Image">
    </div>
    

</div>

@endsection