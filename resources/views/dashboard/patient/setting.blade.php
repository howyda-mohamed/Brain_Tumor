@extends('layouts.dashboard')
@section('title','Foundation')
@section('content')
<main>
    <div class="container-fluid">
        <!-- Page Heading -->
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="row justify content-between pt-2 px-5" id="settings-page">
            @foreach ($users as $user )
            <div class="col-12 col-md-5">
                <div class="card mb-4 settingsCard">
                    <div class="card-body ">
                        <div class="d-flex flex-column align-items-center py-5">
                            <div class="imgs">
                                <img class="mb-3 profileImg" src="{{asset('storage/'.$user -> profile_photo_path)}}" border-radius:100% width="120 px" height="100 px" id="settingsImg">
                                <div>
                                    <img src="{{asset('assets/back/images/icon/Group 317.svg')}}" alt="" id="sub-img">
                                </div>
                            </div>
                            <h5 class="card-title fw-bold" id="name">{{$user -> name}}</h5>
                            <h6 class="card-subtitle" id="email">{{$user ->email}}</h6>
                        </div>
                        <hr>
                        <div class="p-4 pb-5">
                            <h5 class="card-title fw-bold">Description</h5>
                            <h6 class="card-text" id="description">{{$user ->description}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="card mb-4 settingsCard pb-2" id="settings-form">

                    <div class="card-body">
                        <p class="card-title px-3 pt-3 fw-bold">
                            Account ID: <span id="accountId"></span>
                        </p>
                        <hr>
                        <form action="{{url('patient/update_setting/'.$user->id)}}"  method="post" enctype="multipart/form-data" class="px-3 pb-3">
                            @csrf
                            @method('PUT')
                            <div class="row mt-4">
                                <div class="mb-3 col ">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email"  name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$user ->email}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="exampleInputFirstName1" class="form-label">First
                                        Name</label>
                                    <input type="text" class="form-control" id="exampleInputFirstName1"
                                        placeholder="Jane">
                                </div>
                                <div class="mb-3 col">
                                    <label for="exampleInputLastName1" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputLastName1"
                                        placeholder="Doe">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="exampleInputAddress1" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputAddress1"
                                        value="{{$user ->address}}">
                                </div>

                                <div class="mb-3 col">
                                    <label for="exampleInputDate1" class="form-label">Birthday</label>
                                    <input type="date" name="birth_date" class="form-control" id="exampleInputDate1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-5 col">
                                    <label for="exampleInputDescription1" class="form-label">Description</label>
                                    <textarea type="text" name="description" class="form-control pb-3" id="exampleInputDescription1">{{$user -> description}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Update Account</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- /.container-fluid -->
</main>
@endsection
