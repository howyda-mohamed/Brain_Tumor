@extends('layouts.dashboard')
@section('content')
@section('title','doctors')

  <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="condoctor">
                        <div>
                            <img src="" alt="no img" border-radius:100% width="120 px" height="100 px" class="img-fluid  img-thumbnail">
                        </div>
                        <a href="" class="mt-3">Name</a>
                        <span class="text-muted"></span>
                        <div>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="text-center text-muted">
                        </p>
                    </div>
                    </div>

                </div>
            </div>

            <!-- //////////////////////////////////////////////// -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="pt-5 pb-3  px-3 mt-3 divform">
                    <div class=" mb-3 ">

                        <div class="text-center headername ">
                            <img src="" class="img-thumbnail" border-radius:100% width="120 px" height="100 px" alt="" >
                            <h5 class="mt-3"><b></b> </h5>
                            <p></p>
                        </div>
                        <div class="formabout">
                            <h5><b>About</b> </h5>
                            <p></p>
                            <div>
                                <span class="me-2 text-muted">
                                    <i class="fa-solid fa-location-dot"></i>

                                </span>
                            </div>

                            <div class="mt-4 divwatch">
                                <span class="me-2 text-muted"><i class="fa-solid fa-clock"></i></span>

                            </div>

                            <div class="formbuuton mt-5 text-center">
                                <button class="btn">Book Appointment</button>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>
</main>
@endsection
