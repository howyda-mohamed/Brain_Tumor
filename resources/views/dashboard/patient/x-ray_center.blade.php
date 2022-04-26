@extends('layouts.dashboard')
@section('content')
@section('title','Radiology Center')
<main>
    <div class="mricenter px-4 ">
        <div class="container mricontainer mt-4 pt-3 px-4">
            <div class="row justify-content-center ">
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <div class="my-4 searchcontainer">
                        <form action="" type="">
                            <input type="search" name="search" class="form-control search" value="{{$search}}" placeholder="search">
                        </form>
                    </div>
                </div>
            </div>
            @foreach ($centers as $center)
            <div class="row content ">
                    <div class="col-md-2 col-lg-2 col-sm-12 ">
                        <div class="mriimages">
                            <img src="{{asset('assets/uploads/center/'.$center -> img)}}" alt=" no img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 mt-3">
                        <div>
                            <h5 class="mriheader">{{$center -> title}}</h5>
                            <p class="mriparag mt-3 ">{{$center -> description}}</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <div class="diivbutton">
                             <a href="{{url('/patient/map/'.$center->id)}}" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>


</main>

@endsection
