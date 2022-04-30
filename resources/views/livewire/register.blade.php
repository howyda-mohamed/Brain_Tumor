<div>
    <div class="login">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-sm-12 col-lg-6  ps-0">
              <div class="customforms">
                <div>
                  <p  class="text-center mb-4 text "><b> Create Account ?</b></p>
                </div>
                @if ($step == 1)
                <div class="loginorregister ">

                  {{-- ss --}}
                   <div class="buttomone ">
                   {{-- <div wire:click = 'xx("x")' class=" {{ $x }}">
                      <i class="fa-solid fa-user-large"></i>
                      <span>patient</span>
                    </div>
                  </div>
                  <div class="buttontwo">
                    <div wire:click='xx()' class="{{ $y }}" >  <i class="fa-solid fa-user-doctor"></i>
                      <span>doctor</span></div>
                      --}}

               </div>
                  {{-- zz --}}
                </div>
                {{-- <form wire:submit.prevent="register"> --}}
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    {{-- @if ($step == 1) --}}
                    <div class="step step-1 active">
                        <div class="form-group">
                        <input wire:model='name' type="text" id="firstName" name="first-name" class="form-control" placeholder="name">
                        @error('name')<span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                        </div>
                        <div class="form-group mt-4">
                          <input wire:model='email' type="email" id="nickName" name="nick-name"  class="form-control" placeholder="Email">
                          @error('email')<span  style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                        </div>

                        <div class="form-group pass">
                          <span class="icon"><i class="fa-solid fa-eye-slash" id="icon"></i></span>
                          <input wire:model='password' type="password" id="pass"   class="form-control"
                          placeholder="password" >
                          @error('password') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                        </div>
                        <div class="  pass">
                          <span class="icon"><i class="fa-solid fa-eye-slash" id="icontwo"></i></span>
                          <input  wire:model='password_confirmation' type="password" id="passtwo" class="form-control "
                          placeholder="confirm password">
                          @error('password_confirmation') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                        </div>

                        <div class="mt-5 text-center">
                        <button wire:click='increaceStep' type="button" class="next-btn btn  submit">Next</button>

                        </div>
                    </div>


                    @else
                    <div class="form-group my-3">

                        <input wire:model='birthDate' type="date" id="" name="" class="form-control ">
                        @error('birthDate') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                      </div>
                      <div class="form-group">

                        <select wire:model='gender' name="" id="" class=" selectform">
                            <option value =''>select gender</option>
                          <option value="male">male</option>
                          <option value="female">female</option>
                        </select>
                        @error('gender') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                      </div>
                      {{-- ff --}} <br>
                      <div class="form-group">
                      <select wire:model='role' name="" id="" class=" selectform">
                        <option >select role</option>
                    <option value="1">Doctor</option>
                    <option  value="2">Patient</option>
                    </select>
                    @error('role') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                    @if ($role == 1)
                  <br>  <input wire:model='code' type="text" id="nickName" name="nick-name"  class="form-control" placeholder="Enter your Code">
                    @endif
                    @error('code') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                    </div>
                      {{-- ff --}}
                      <div class="row mt-4 gx-0">
                        <div class=" col-1 col-1check  text-end ">
                          <input wire:model = 'check' type="checkbox" class="form-check-input"  id="chek" >
                        </div>

                        <div class="col-10 col-11check gx-0 ms-2">
                          <label for="chek " >By signing up you accept <span class="termcolor" >terms of service</span>  and <span  class="termcolor"> privacy policy</span> </label>
                          @error('check') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror

                        </div>

                      </div>

                      <div class=" buttons">

                        <button wire:click='decreaceStep' type="button" class="previous-btn btn ms-5 ">Prev</button>
                        <button  type="submit" wire:click='register' class="submit-btn btn me-5">Submit</button>

                </div>

 @endif

                {{-- </form> --}}
              </div>
            </div>
            <!-- <div class="col-md-4 col-lg-6 col-sm-12 ">
              <img src="images/login.jpg" alt="no img" class="img-fluid vh-100">
            </div> -->
          </div>

        </div>
      </div>


</div>
