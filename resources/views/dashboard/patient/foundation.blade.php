@extends('layouts.dashboard')
@section('title','Foundation')
@section('content')
<main>
        <div class="mricenter px-4">
            <div class="container mricontainer mt-4 pt-3 px-4">
                <div class="row justify-content-center ">
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <div class="my-4 searchcontainer">
                            <form action="" type="">
                                <input type="search" name="search" class="form-control search" value="{{$search}}" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                @foreach ($foundations as $foundation)
                <div class="row content mt-3 ">
                    <div class="col-md-2 col-lg-2 col-sm-12 mt-3">
                        <div class="mriimages">
                            <img src="{{asset('assets/uploads/foundation/'.$foundation -> img)}}" alt=" no img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-12 mt-3">
                        <div>
                            <h5 class="mriheader">{{$foundation -> title}}</h5>
                            <p class="mriparag mt-3 ">{{$foundation ->description}} <a href="">view website</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
