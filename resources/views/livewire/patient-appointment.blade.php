<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    @foreach ($doctors as $doctor)
                    {{-- {{  $doctor}} --}}
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div wire:click='changeBar({{ $doctor->id }})' class="condoctor">
                            <div>
                                <img style="height:150px; width:150px;"  src="{{asset('storage/'.$doctor -> profile_photo_path)}}" alt="no img" class="img-fluid  img-thumbnail">
                            </div>
                            <h5 class=" mt-3">Dr. {{ $doctor->name }}</h5>
                            <span class="text-muted">Neurologists</span>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <p class="text-center text-muted">{{ $doctor->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- //////////////////////////////////////////////// -->
            @if ( $pageNum==1)
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="pt-5 pb-3  px-3 mt-3 divform">
                    <div class=" mb-3 ">
                        <div class="text-center headername ">
                            <img style=" border-radius: 20%;max-width:200px;height:200px;" src="{{ asset('storage/'.$image) }}" alt="" class="img-fluid">
                            <h5 class="mt-3"><b>Dr. {{ $name }}</b> </h5>
                            <p>Neurologists, {{ $address }}</p>
                        </div>
                        <div class="formabout">
                            <h5><b>About</b> </h5>
                            <p>{{$description}}</p>
                            <div>
                                <span class="me-2 text-muted">
                                    <i class="fa-solid fa-:2-dot"></i>
                                    Neurologists, London
                                </span>
                            </div>
                            <div class="mt-4 divwatch">
                                <span class="me-2 text-muted"><i class="fa-solid fa-clock"></i></span>
                                Wednesday, 09.00am - 11.00am
                            </div>
                            <div class="mt-4 divwatch">
                                <span class="me-2 text-muted"><i class="fa-solid fa-clock"></i></span>
                                Monday, 05.00pm - 12.00am
                            </div>
                            <div class="formbuuton mt-5 text-center">
                                <button wire:click='bookBar' class="btn">Book Appointment</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @elseif($pageNum==2)
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="py-5 px-3 mt-3 divform">
                  <div class="text-center mb-5 ">
                    <h5 class="formheader">Make an appointment</h5>
                    <span class="text-muted">We will send you a confirmation within 24 hours. </span>
                  </div>



                    <div class="mt-3  ">

                        <select wire:model='date' class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>select Date</option>
                            @foreach ( $details  as  $detail )
                            <option >{{ $detail->date }}</option>
                            @endforeach



                          </select>

                    </div>
                    <div class="mt-3">
                      <label for="" class="labeldate">Select Time</label>
                      <div id="box" class="text-center btnradio">
                  @php
                  $arr= array();
                        //appointment to specific doctor_id
                 foreach ($appointments as $appointment){
                        //convert json to array contain details_id
                     $arr[]=$appointment->details_id;
             }
                 @endphp
                 {{-- get doctor time in specific date --}}
              @foreach($times as $time)
              {{-- if doctor has appointment in same time (delete it from screen) --}}
            @if (!in_array($time->id, $arr))


                <input wire:model='time' type="radio" class="btn-check" value="{{ $time->time }}"  id="btnradio{{ $loop->index+1 }}" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio{{ $loop->index+1 }}">{{ date('h:i A', strtotime($time->time)) }}</label>


            @endif


          @endforeach






                      </div>
                      <div class="my-4 ">
                        {{-- <select name="" id="" class=" locationselect" value="location">
                          <option value="">mansoura</option>
                          <option value="">cairo</option>
                        </select> --}}

                        <input class="form-control" type="text" value="  @if (isset($clinicAdress->location))
                        {{"Location : ". $clinicAdress->location}}

                        @endif  " readonly>



                      </div>
                    </div>
                    <div class="mt-4 pt-4 btnbtn text-center ">
                      <button wire:click='bookAppointment()' class="btn btn-primary py-2">Confirm</button>

                    </div>

                </div>
              </div>
              @elseif($pageNum==3)
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="py-5 px-3 mt-3 divform">
                    <div class="text-center mb-3 ">
                        <div class="py-5 px-5  imgformm">
                            <img src=" {{asset('assets/back/images/appiontmenttwoo.png')}}" alt="no img" class="img-fluid">

                        </div>
                        <div>
                            <h5><b>Reservation Was Successful</b></h5>
                            <p>Our Sincere Wishes</p>
                        </div>
                        <div class="butform ">
                            <button wire:click='updateAppointment()' class="btn"><b>Show Booking</b> </button>
                        </div>
                    </div>

                </div>
                @elseif($pageNum==4)
                <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="py-5 px-3 mt-3 divform">
                    <div class="text-center mb-3 ">
                        <div class="py-5 px-5  imgformm">
                            <img src=" {{asset('assets/back/images/appiontmenttwoo.png')}}" alt="no img" class="img-fluid">

                        </div>
                        <div>
                            <h5><b>Reservation Was Successful</b></h5>
                            <p>Our Sincere Wishes</p>
                        </div>
                        <div class="butform ">
                            <button wire:click='updateAppointment()' class="btn"><b>Show Booking</b> </button>
                        </div>
                    </div>

                </div>
            </div>
            @endif



            {{-- @php
            $apps =  json_decode($appointments, true);
            $arr = [];
            for ($i=0; $i <count($apps) ; $i++) {
                array_push($a,$apps[$i]['details_id']);
            }
            @endphp --}}


            {{-- @for ($i = 0; $i < count($arr); $i++)
            {{    $arr[$i]}}
           @endfor --}}













    </div>

</div>
