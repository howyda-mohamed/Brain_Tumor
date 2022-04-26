<x-guest-layout>
      <div class="login">
        <div class="formlogin">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-sm-6  ps-0 ">
                <div class="customforms">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                  <div class="mb-5">
                    <h4 class="text-center mb-4 text ">Welcome Back !</h4>
                  </div>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')"  autofocus   placeholder="your Email"/>
                    </div>

                       @error('email') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                    <div class=" pass">
                        <span class="icon"><i class="fa-solid fa-eye-slash" id="icon"></i></span>
                        <x-jet-input id="password" class="form-control" type="password" name="password"  autocomplete="current-password"  placeholder="password"/>
                      </div>

                         @error('password') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                      <div class="mb-2 text-center">
                        <button type="submit" class="btn  mt-5 submit">{{ __('Log in') }}</button>
                      </div>
                      <div class="welor text-center">
                        <span class="sone"></span>
                        <span>OR</span>
                        <span class="stwo"></span>
                      </div>
                     </form>
                    <div class="images text-center">
                        <img src="{{asset('assets/login/images/goodgle.png')}}" alt="no img" >
                        <img src="{{asset('assets/login/images/facebook.png')}}" alt="no img"  class="imgface">
                        <img src="{{asset('assets/login/images/twitter.jpg')}}" alt="no imagesg" >
                      </div>
                      <div class="textsign text-center">
                        <h5>Don't have An Account?</h5>
                        <a href="{{route('reg')}}">Register</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
</x-guest-layout>
