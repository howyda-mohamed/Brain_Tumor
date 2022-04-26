@extends('layouts.dashboard')
@section('content')
@section('title','Chat')
<main>
    <div class="row" id="chats-page">
        <div class="col-12 col-md-6 col-xl-3 chats-section">
            <div class="row justify-content-center pb-2 pt-4">
                <input type="text" name="search" id="search" placeholder="Search" class="col-9">
            </div>
            <hr id="big-hr">
            <div id="chats" class="px-3">
                <div class="row justify-content-between">
                    <div class="col-9 row">
                        <div class="col-3 col-lg-4">
                            <img src="{{asset('assets/back/images/emily haden.png')}}" alt="">
                        </div>
                        <div class="col-9 col-lg-8">
                            <h5 class="text-nowrap">Emma Bunton</h5>
                            <h6 class="text-truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Quae, maiores?</h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <span class="time text-grey text-nowrap">12:04 pm</span>
                    </div>
                </div>
                <hr class="small-hr">

                <div class="row justify-content-between">
                    <div class="col-9 row">
                        <div class="col-3 col-lg-4">
                            <img src="{{asset('assets/back/images/emily haden.png')}}" alt="">
                        </div>
                        <div class="col-9 col-lg-8">
                            <h5 class="text-nowrap">Emma Bunton</h5>
                            <h6 class="text-truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Quae, maiores?</h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <span class="time text-nowrap">12:04 pm</span>
                    </div>
                </div>
                <hr class="small-hr">

                <div class="row justify-content-between">
                    <div class="col-9 row">
                        <div class="col-3 col-lg-4">
                            <img src="{{asset('assets/back/images/emily haden.png')}}" alt="">
                        </div>
                        <div class="col-9 col-lg-8">
                            <h5 class="text-nowrap">Emma Bunton</h5>
                            <h6 class="text-truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Quae, maiores?</h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <span class="time text-nowrap">12:04 pm</span>
                        <span class="msg-num float-end">2</span>
                    </div>
                </div>
                <hr class="small-hr">

                <div class="row justify-content-between">
                    <div class="col-9 row">
                        <div class="col-3 col-lg-4">
                            <img src="{{asset('assets/back/images/emily haden.png')}}" alt="">
                        </div>
                        <div class="col-9 col-lg-8">
                            <h5 class="text-nowrap">Emma Bunton</h5>
                            <h6 class="text-truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Quae, maiores?</h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <span class="time text-nowrap">12:04 pm</span>
                        <span class="msg-num float-end">2</span>
                    </div>
                </div>
                <hr class="small-hr">

            </div>
        </div>
        <div class="col-md-6 d-none d-md-block chats-section"></div>
        <div class="col-xl-3 d-none d-xl-block profile-section">
            <div class="vstack gap-2 mx-auto text-center pt-5 mb-5">
                <img src="{{asset('assets/back/images/emily haden.png')}}" id="profile-img" alt="" class="mb-3">
                <h4 class=" fw-bold">Emma Bunton</h4>
                <h6 class="">Neurologist, London</h6>
            </div>
            <div class="ps-3">
                <div class="row align-items-start mb-4">
                    <div class="col-2 blue-div">
                        <img src="{{asset('assets/back/images/icon/background.svg')}}" alt="">
                        <img src="{{asset('assets/back/images/icon/Icon ionic-md-person.svg')}}" alt="" id="person">
                    </div>
                    <div class="col-8">
                        <h5 class="fw-bold">About</h5>
                        <h6>Lorem ipsum dolor sit amet.</h6>
                    </div>
                </div>
                <div class="row align-items-start mb-4">
                    <div class="col-2 blue-div">
                        <img src="{{asset('assets/back/images/icon/call.svg')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5 class="fw-bold">Phone Number</h5>
                        <h6>+01112223344</h6>
                    </div>
                </div>
                <hr>
                <div class="row align-items-start my-3">
                    <div class="col-2 blue-div">
                        <img src="{{asset('assets/back/images/icon/attachment.svg')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5 class="fw-bold">Attachments</h5>
                        <div class="row justify-content-center">
                            <img src="{{asset('assets/back/images/75yo_male.png')}}" alt="" class="col-5">
                            <img src="{{asset('assets/back/images/78de707f66bbf12bf2da188b96bb2e_big_gallery.png')}}" alt=""
                                class="col-5">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row align-items-start my-3">
                    <div class="col-2 blue-div">
                        <img src="{{asset('assets/back/images/icon/settings.svg')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5 class="fw-bold">Chat Settings</h5>
                        <div class="row">
                            <div class="col-9">
                                <h6 class="text-nowrap">Mute Notifications</h6>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-switch ms-2">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="link-danger" style="text-decoration: none;">Report Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
