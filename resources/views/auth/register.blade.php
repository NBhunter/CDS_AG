<x-guest-layout>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Đăng ký</p>


                <!-- Email input -->
                <div class="form-outline mb-4">
                <x-jet-input id="name" class="form-control form-control-lg block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-jet-label for="name" class="form-label" value="{{ __('Tên') }}" />
                </div>
                <div class="form-outline mb-4">
                    <x-jet-input id="email" class="form-control form-control-lg block mt-1 w-full" type="email" name="email" :value="old('email')" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  autofocus />
                    <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />

                </div>
                {{-- <div class="form-outline mb-4">
                    <x-jet-label for="username" value="{{ __('Username') }}" />
                    <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
                </div> --}}
                <div class="form-outline mb-4">
                    <x-jet-input id="phone" maxlength="10"  class="form-control form-control-lg block mt-1 w-full" type="text" name="phone" :value="old('phone')" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" />
                    <x-jet-label for="phone" class="form-label" value="{{ __('phone') }}" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">

                    <x-jet-input id="password" class="block mt-1 w-full form-control form-control-lg" type="password" name="password" required autocomplete="new-password" />
                    <x-jet-label for="password" class="form-label" value="{{ __('Mật khẩu') }}" />
                </div>

                <div class="form-outline mb-4">
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-jet-label for="password_confirmation" class="form-label" value="{{ __('Nhập lại mật khẩu') }}" />
                </div>



                <div class="text-center text-lg-start mt-4 pt-2">
                    <x-jet-button class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    {{ __('Register') }}
                    </x-jet-button>
                    <p class="small fw-bold mt-2 pt-1 mb-0"> <a href="{{ route('login') }}"
                        class="link-danger" >{{ __('Bạn đã đăng ký?') }}</a></p>
                    {{-- <a class="small fw-bold mt-2 pt-1 mb-0" href="{{ route('login') }}">
                        {{ __('Bạn đã đăng ký?') }}
                    </a> --}}
                </div>

              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->

          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>

</x-guest-layout>
