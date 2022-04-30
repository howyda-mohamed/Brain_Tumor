@extends('layouts.dashboard')
@section('title','MRI')
@section('content')
<main>
        @if($mri > 0)
            @foreach($mriss as $m)
                @if ($m->type_approved == "0")
                <div class="container-fluid">
                        @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <div class="row justify-content-center flex-column" id="file-submitted">
                            <img src="{{asset('assets/back/images/file submitted.png')}}" alt="file submitted" class="mt-5 mb-4 mx-auto">
                            <p class="mx-auto text-center text-dark-blue col-md-4">Your request has been sent to the
                                specialist, please wait to receive the report
                            </p>
                        </div>
                </div>
                @elseif ($m ->type_approved == "1")
                @if (Session::has('msg'))
                <div class="alert alert-danger">{{ Session::get('msg') }}</div>
                @endif
                <div class="container-fluid row justify-content-center">
                    <div class="col-md-8 p-5 my-3" id="diagnosis-section">
                        <h2 class="text-dark-blue text-center">Diagnosis of Brain Tumor</h2>
                        <h5 class="text-grey text-center fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </h5>
                        <form action="{{route('patient.insert_mri')}}" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center">
                            @csrf
                            <label id="drag-drop" for="upload" class="col-md-8 mx-auto p-4 my-3 row justify-content-center">
                                <input type="file" id="upload" name="image" >
                                <img src="{{asset('assets/back/images/cloud-submit.png')}}" alt="submit image" id="drag-img" class="img-fluid">
                                <h3 class="text-grey text-center mt-2">Drag & Drop</h3>
                                <h4 class="text-grey text-center">Your files here to upload</h4>
                            </label>
                             @error('image') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                            <div class="m-auto mt-3 mb-4">
                                <input type="text" name="code" id="doc-code" class="form-control p-2 ps-4"
                                    placeholder="Doctor Code" >
                            </div>
                             @error('code') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                            <button class="btn btn-primary px-5 m-auto">Submit</button>
                        </form>
                    </div>
                </div>
                @endif
            @endforeach
        @else
                @if (Session::has('msg'))
                <div class="alert alert-danger">{{ Session::get('msg') }}</div>
                @endif
            <div class="container-fluid row justify-content-center">
                <div class="col-md-8 p-5 my-3" id="diagnosis-section">
                    <h2 class="text-dark-blue text-center">Diagnosis of Brain Tumor</h2>
                    <h5 class="text-grey text-center fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h5>
                    <form action="{{route('patient.insert_mri')}}" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center">
                        @csrf
                        <label id="drag-drop" for="upload" class="col-md-8 mx-auto p-4 my-3 row justify-content-center">
                            <input type="file" id="upload" name="image" >
                            <img src="{{asset('assets/back/images/cloud-submit.png')}}" alt="submit image" id="drag-img" class="img-fluid">
                            <h3 class="text-grey text-center mt-2">Drag & Drop</h3>
                            <h4 class="text-grey text-center">Your files here to upload</h4>
                        </label>
                        @error('image') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                        <div class="m-auto mt-3 mb-4">
                            <input type="text" name="code" id="doc-code" class="form-control p-2 ps-4"
                                placeholder="Doctor Code" >
                        </div>
                         @error('code') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                        <button class="btn btn-primary px-5 m-auto">Submit</button>
                    </form>
                </div>
            </div>
        @endif
</main>
@endsection
