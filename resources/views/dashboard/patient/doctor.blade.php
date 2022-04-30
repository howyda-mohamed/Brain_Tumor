@extends('layouts.dashboard')
@section('content')
@section('title','doctors')
<main class="pt-4">
    <div class="patient">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-12">
                <div class="row">
                    @foreach ($doctors as $doctor )
                    <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="condoctor over">
                        <div>
                            <img src="{{$doctor -> profile_photo_url}}" width="130 px" alt="no img" class="img-fluid  img-thumbnail">
                        </div>
                        <h5 class=" mt-3">{{$doctor -> name}}</h5>
                        <span class="text-muted">{{$doctor -> email}}</span>
                        <div>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="text-center text-muted">{{$doctor -> description}}
                        </p>
                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
