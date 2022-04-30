@extends('layouts.dashboard')
@section('title','home')
@section('content')
<main>
    <h3 class="mb-4 patient-h3 fw-bold">Categories</h3>
    <div class="container-fluid px-5">
        <!-- Page Heading -->
        <div id="categoriesHeading" class="px-4 p-3 shadow-sm">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="row flex-wrap">
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="{{route('patient.show_mri')}}">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-brain"></i> -->
                                            <img src="{{asset('assets/back/images/icon/Daco_5898260 (1).svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold pt-2">Check Brain</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="{{route('patient.chat')}}">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-message"></i> -->
                                            <img src="{{asset('assets/back/images/icon/chat.svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold">Messages</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="{{route('patient.artical')}}">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-head-side-virus"></i> -->
                                            <img src="{{asset('assets/back/images/icon/social-care.svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold pt-2">Psychological Help</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="{{route('patient.foundation')}}">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-hand-holding-dollar"></i> -->
                                            <img src="{{asset('assets/back/images/icon/brain (1).svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold pt-2">Brain Tumor Foundations</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="#">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center ">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-lungs "></i> -->
                                            <img src="{{asset('assets/back/images/icon/lungs.svg')}}" alt="">

                                        </div>
                                        <p class="card-text fw-bold">Lung Specialist</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="#">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center ">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-bone "></i> -->
                                            <img src="{{asset('assets/back/images/icon/pelvis.svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold">Bone Specialist</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="#">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-tooth"></i> -->
                                            <img src="{{asset('assets/back/images/icon/add.svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold">Dentist</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="#">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-heart-pulse "></i> -->
                                            <img src="{{asset('assets/back/images/icon/heart (1).svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold">Cardiologist</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-4 col-xl-2 my-3 patientCard">
                            <a href="#">
                                <div class="card text-center shadow-sm">
                                    <div
                                        class="card-body d-flex align-content-around flex-wrap justify-content-center">
                                        <div
                                            class="icon-background d-flex align-items-center justify-content-center">
                                            <!-- <i class="categoriesIcons fa-solid fa-code-branch "></i> -->
                                            <img src="{{asset('assets/back/images/icon/doctor (1).svg')}}" alt="">
                                        </div>
                                        <p class="card-text fw-bold">Neurologist</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex align-items-center">
                    <img src="{{asset('assets/back/images/patient into mri.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="appointments">
        @if (session()->has('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif
        <h3 class="my-4 patient-h3 fw-bold">Appointments</h3>
        @foreach ($indexs as $index )
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center appointment my-3 py-2">

                    <div class="col-12 col-lg-3">
                        <img src="{{asset('storage/'.$index -> profile_photo_path)}}"   alt="" class="patient-pic">
                        <span class="patient-name fw-bold text-center">
                            {{$index -> name}}
                        </span>
                    </div>

                    <div class="col-12 col-lg-3">
                        <h5><span>Date : </span>{{$index -> date}}</h5>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5><span>Time : </span>{{$index -> time}}</h5>
                    </div>
                <div class="col-12 col-lg-3 d-flex align-items-center justify-content-end">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{asset('assets/back/images/icon/Icon metro-cancel.svg')}}" alt="" class="mx-3">

                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure ?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to cancel appointment ?
                                </div>
                                <div class="modal-footer border-0">
                                    <a href="#" class="btn border" data-bs-dismiss="modal">No</a>
                                    <a href="{{url('patient/delete_app/'.$appointment[0]['id'])}}" class="btn btn-danger">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('patient.chat')}}" class="btn btn-primary fw-bold message-btn">Message</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection
