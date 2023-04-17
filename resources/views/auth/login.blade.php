<style>



    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        opacity: 80%;

    }

    .container-fluid {
        position: fixed;
        top: 15%;
        right: 25%;
        /* margin: 20px; */
        width: 600px;
        /* padding: 16px; */
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 5px;
    }

    @media only screen and (max-width: 600px) {
        .container-fluid {
            position: fixed;
            top: 15%;
            right: 15%;
            left: 15%;
            margin-left: 200px;
            width: 250px;
            /* padding-left: 35%; */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }
        .login{
            margin-left: 200px;
        }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .container-fluid {
            position: fixed;
            top: 15%;
            right: 15%;
            left: 15%;
            /* margin: 20px; */
            width: 350px;
            /* padding: 16px; */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .container-fluid {
            position: fixed;
            top: 15%;
            right: 15%;
            left: 15%;
            /* margin: 20px; */
            width: 400px;
            /* padding: 16px; */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .container-fluid {
            position: fixed;
            top: 15%;
            right: 25%;
            /* margin: 20px; */
            width: 500px;
            /* padding: 16px; */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        .container-fluid {
            position: fixed;
            top: 15%;
            right: 15%;
            /* margin: 20px; */
            width: 650px;
            /* padding: 16px; */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }
    }
</style>

<x-guest-layout>
    <section class="vh-100">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('logout_file/img/bg.mp4') }}" type="video/mp4">
        </video>
        <div class="container-fluid h-custom">
            <form id="login" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start"
                    ALIGN="CENTER";>
                    <p class="lead fw-normal mb-0 me-3" style="font-weight:bold;">ĐĂNG NHẬP VỚI</p>
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn  btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-floating mx-1">
                        <i class="fab fa-linkedin-in"></i>
                    </button>
                </div>
                <br>
                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                </div>

                <!-- Email input -->

                <div class="form-outline mb-4" style="font-family: Roboto;">
                    <x-jet-label for="auth" class="form-label" value="{{ __('Email / Số điện thoại') }}" />
                    <x-jet-input id="auth" class="form-control form-control-lg block mt-1 w-full" type="text"
                        name="auth" :value="old('auth')" required autofocus />

                </div>

                <!-- Password input -->
                <br>
                <div class="form-outline mb-3" style="font-family: Roboto;">
                    <x-jet-label for="password" class="form-label" value="{{ __('Mật khẩu') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full form-control form-control-lg" type="password"
                        name="password" required autocomplete="current-password" />

                    {{-- <input id="password"  type="password" name="password" required autocomplete="current-password"  class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label> --}}
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0" style="font-family: Roboto;">
                        <x-jet-checkbox id="remember_me" name="remember" class="form-check-input me-2" />
                        <span class=" form-check-label ml-2 text-sm text-gray-600">{{ __('Ghi nhớ mật khẩu') }}</span>
                        {{-- <input class="form-check-input me-2" type="checkbox" value="" id="remember_me" name="remember" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label> --}}
                    </div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Bạn đã quên mật khẩu ?') }}
                        </a>
                    @endif
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <x-jet-button class="btn btn-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                        {{ __('Đăng nhập') }}
                    </x-jet-button>
                    {{-- <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;"> {{ __('Log in') }}</button> --}}
                    <p class="small fw-bold mt-2 pt-1 mb-0" style="margin:10px;">Chưa có tài khoản ? <a
                            href="{{ route('register') }}" class="link-danger">Đăng ký</a></p>
                </div>

            </form>
        </div>

        <!-- Right -->

    </section>

</x-guest-layout>
