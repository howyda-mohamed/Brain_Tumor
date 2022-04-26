@extends('layouts.dashboard')
@section('content')
@section('title','Radiology Center')
</main>
<main class="py-4 px-3">
    <div class="mapcontainer p-4 shadow-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <div>
                        <img src="{{asset('assets/uploads/center/'.$centers -> img)}}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-8 col-lg-8 col-sm-8">
                    <div>
                        <p class="mt-3 mapcolor">{{$centers -> title}} is
                            {{$centers -> description}}</p>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-5 col-lg-3 col-sm-6">
                            <div>
                                <p>
                                    Location:  {{$centers -> location}}<br>
                                    Phone: {{$centers -> phone}}<br>
                                    Fax: {{$centers ->fax}}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
