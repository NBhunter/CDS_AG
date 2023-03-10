<x-guest-layout>
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Đăng nhập với</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
            </div>

            <!-- Email input -->
            {{-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}
            <div class="form-outline mb-4">
                <x-jet-input id="auth" class="form-control form-control-lg block mt-1 w-full" type="text" name="auth" :value="old('auth')" required autofocus />
                <x-jet-label for="auth" class="form-label" value="{{ __('Email/Số điện thoại') }}" />
                {{-- <input type="email" id="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" type="email" name="email" :value="old('email')" required autofocus  />
              <label class="form-label" for="form3Example3">Email address</label> --}}
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <x-jet-input id="password" class="block mt-1 w-full form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                <x-jet-label for="password" class="form-label" value="{{ __('Mật khẩu') }}" />
                {{-- <input id="password"  type="password" name="password" required autocomplete="current-password"  class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label> --}}
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <x-jet-checkbox id="remember_me" name="remember" class="form-check-input me-2"/>
                    <span class=" form-check-label ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                {{-- <input class="form-check-input me-2" type="checkbox" value="" id="remember_me" name="remember" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label> --}}
              </div>
              @if (Route::has('password.request'))
              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
              </a>
          @endif
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <x-jet-button class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    {{ __('Đăng nhập') }}
                </x-jet-button>
              {{-- <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;"> {{ __('Log in') }}</button> --}}
              <p class="small fw-bold mt-2 pt-1 mb-0">chưa có tài khoản? <a href="{{ route('register') }}"
                  class="link-danger" >đăng ký</a></p>
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
