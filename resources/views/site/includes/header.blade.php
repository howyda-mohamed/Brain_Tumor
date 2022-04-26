<div class="container-fluid ">
    <img class="navbar-brand ms-lg-5" src="{{asset('assets/front/images/finallogoimage.png')}}" alt="no image" class="bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav m-auto   mb-lg-0">
        <li class="nav-item  me-5 afterhome ">
          <a class="nav-link   navlinkcolor" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item me-5 aftertag">
          <a class="nav-link " href="#">About us </a>
        </li>
        <li class="nav-item me-5 aftertag">
          <a class="nav-link" href="#">service</a>
        </li>
        <li class="nav-item me-5 aftertag">
          <a class="nav-link" href="#">Doctors</a>
        </li>
      </ul>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <x-app-layout>

                    </x-app-layout>
                @else
                    <a href="{{ route('login') }}" class="btn  formbtnone me-3">Log in</a>

                    @if (Route::has('reg'))
                        <a href="{{ route('reg') }}" class="btn   formbtntwo">Sign Up</a>
                    @endif
                @endauth
            </div>
        @endif
   </div>
</div>
