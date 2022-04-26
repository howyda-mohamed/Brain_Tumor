<nav class="navbar navbar-expand-lg navbar-dark sticky-top mb-4">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 me-5 text-uppercase fw-bold" href="#">
            <img src="{{asset('assets/back/images/newlogo.png')}}" alt="no img" style="max-height: 43px;" class="me-5">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
            aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
            <form class="d-flex ms-lg-5 my-3 w-50 me-auto  my-lg-0">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search Doctor" aria-label="Search" />
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown text-light" id="notifications">
                    <a class="nav-link dropdown-toggle px-3 mx-2" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-bell text-light"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-4 shadow-sm">
                        <li class="mb-3">
                            <h4 class="text-dark-blue fw-bold">Notifications
                                <span class="float-end">
                                    <i class="fa-solid fa-ellipsis-vertical fw-bold"></i>
                                </span>
                            </h4>
                        </li>
                        <li>
                            <h5 class="text-dark-blue fw-bold">New</h5>
                        </li>
                        <li>
                            <div class="row lh-1 align-items-center py-2 notif-card mb-2">
                                <div class="col-2">
                                    <img src="{{asset('assets/back/images/emily haden.png')}}" alt="" class="notif-img">
                                </div>
                                <div class="col-9">
                                    <h6 class="fw-normal text-truncate">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit.
                                    </h6>
                                    <span class="time text-grey">1 hour ago</span>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row lh-1 align-items-center py-2 notif-card mb-2">
                                <div class="col-2">
                                    <img src="{{asset('assets/back/images/emily haden.png')}}" alt="" class="notif-img">
                                </div>
                                <div class="col-9">
                                    <h6 class="fw-normal text-truncate">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit.
                                    </h6>
                                    <span class="time text-grey">1 hour ago</span>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row lh-1 align-items-center py-2 notif-card mb-2">
                                <div class="col-2">
                                    <img src="{{asset('assets/back/images/emily haden.png')}}" alt="" class="notif-img">
                                </div>
                                <div class="col-9">
                                    <h6 class="fw-normal text-truncate">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit.
                                    </h6>
                                    <span class="time text-grey">1 hour ago</span>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <li>
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="no img" class="logoimg me-2">
                        <span class="text-light me-2">{{ Auth::user()->name }}</span>
                    </li>
                @endif
                <li class="nav-item dropdown" id="profile-dropdown">
                    <a class="nav-link dropdown-toggle pe-3" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: white;">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">
                                <div class="row lh-1 align-items-center">
                                    <div class="col-2">
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="" id="profile-img">
                                    </div>
                                    <div class="col-10">
                                        <h5>{{ Auth::user()->name }}</h5>
                                        <span class="time text-grey">See your profile</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr class="mx-3">

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item"
                                     @click.prevent="$root.submit();">
                            <i class="fa-solid fa-right-from-bracket"></i> {{ __('Log Out') }}</a>
                        </form>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
