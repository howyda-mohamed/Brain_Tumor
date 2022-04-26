@extends('layouts.home')
@section('title','home')
@section('content')
<div class="health  py-5  gym ">
    <div class="container">
      <div class="row justify-content-around py-5">
        <div class="col-md-6 pt-lg-5">
          <div>
            <h1 class="healthheader">We Are Providing Best <br> Health Care and diagnosis <br> Brain tumer</h1>
            <p class="text-muted healthparagraph">We help you to get health easily any
              time and any where</p>
            <div class="mt-5">
              <button class="btn btn-lg btn-primary my-5 ">Get start</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="images">
            <img src="{{asset('assets/front/images/extractedone.png')}}" alt="no images" class="img-fluid">
            <!-- <div class="absimg">
            <img src="images/heart.png" alt="">
          </div>  -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ///////////////////////////////////////////// -->
  <!-- /////////////////about us /////////////////// -->
  <div class="about my-5 py-5">
    <div class="container">
        <h1 class="text-center abootafter ">About us</h1>
      <div class="row justify-content-between">
        <div class="col-md-4">
          <div class="aboutimg mb-5">
            <img src="{{asset('assets/front/images/about.png')}}" alt="no image" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mt-lg-5">
            <h1 class="aboutheeder"> We Have the Best Doctors Available in the city</h1>
            <p class="aboutparagrapg text-muted">
              We provide primary care when you need it,get <br>
              personalized and high quality healthcare by taking <br>to top
            </p>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-7">
            <div>
              <input type="radio" name="" id="" value="Emergency cases" checked>
              <label for="">Emergency cases</label>
              <br>
              <input type="radio" name="" id="" value="Expert doctors" checked>
              <label for="">Expert doctors</label>
            </div>
            </div>
            <div class="col-md-12 col-lg-5">
              <div>
                <input type="radio" name="" id="" value="modern clinic" checked>
                <label for="">Modern clinic</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ////////////high quality ////////////////// -->
  <div class="qualityheader text-center p-5">
    <h1 class="qualitycolor">We provide High Quality Header</h1>
  </div>
  <div class="highquality p-5 mb-5">
    <div class="container">
      <div class="row mb-5  justify-content-around">
        <div class="col-md-6">
          <div class="mb-3">
            <img src="{{asset('assets/front/images/Icon brain.png')}}" alt="no img">
          </div>
          <div>
            <h1 class="mb-3 qualitycolor">dignosis Brain Tumer</h1>
            <p class="qualitycolor">insert your MRI image to chec your brain and wait to see <br> the result of the
              operation</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="mb-3">
            <img src="{{asset('assets/front/images/icon2.png')}}" alt="no img">

          </div>
          <div>
            <h1 class="mb-3 qualitycolor">Book and Appointment</h1>
            <p class="qualitycolor">book and Appointment with neurologists <br> to check up your brain</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-around my-5">
        <div class="col-md-6">
          <div class="mb-3">
            <img src="{{asset('assets/front/images/icon3.png')}}" alt="no img" class="iconthree">
          </div>
          <div>
            <h1 class="qualitycolor">MRI center</h1>
            <p class="qualitycolor ">location of MRI center and all way to connect</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="mb-3">
            <img src="{{asset('assets/front/images/Icon brain.png')}}" alt="no img">
          </div>
          <div>
            <h1 class="qualitycolor">medical consulation</h1>
            <p class="qualitycolor">chat with doctors and ask them about any thing at any time</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////// -->
  <!-- //////////////////our doctors///////////// -->
  <div class="doctors">
    <div class="doctorsheader container">
      <h1 class="doctortext">Meet Our Doctors</h1>
      <h5 class="doctortexttwo">only best doctors her</h5>
    </div>
    <div class="container mt-5">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row mb-sm-3 justify-content-center">
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card1.png')}}" alt="no img" class="maximg">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Steven Jacob</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card2.png')}}" alt="no img" class="maximgcard2">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Nicholas Pepe</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card3.png')}}" alt="no img"  class="img-fluid">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Emily Haden</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mb-sm-3 ">
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card1.png')}}" alt="no img"  class="maximg">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Steven Jacob</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card2.png')}}" alt="no img" class=" maximgcard2">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Nicholas Pepe</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card3.png')}}" alt="no img" class="img-fluid">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Emily Haden</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mb-sm-3 ">
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg ">
                    <img src="{{asset('assets/front/images/card1.png')}}" alt="no img" class="maximg">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Steven Jacob</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card2.png')}}" alt="no img" class="maximgcard2">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Nicholas Pepe</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12 mb-sm-3">
                <div class="doctorcard mt-3">
                  <div class="doctorcardimg">
                    <img src="{{asset('assets/front/images/card3.png')}}" alt="..." class="img-fluid">
                  </div>
                  <div>
                    <h6 class="mt-4">Dr. Emily Haden</h6>
                    <p>Neurologist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span  aria-hidden="true"></span>
            <!-- class="carousel-control-prev-icon" -->
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span  aria-hidden="true"></span>
            <!-- class="carousel-control-next-icon" -->
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection
