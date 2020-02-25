@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Material form login -->
            <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Sign in</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email -->
                <div class="md-form">
                    <input type="email" id="email @error('email') is-invalid @enderror" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email">E-mail</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input type="password" id="materialLoginFormPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="materialLoginFormPassword">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-around">
                    <div>
                    <!-- Remember me -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="materialLoginFormRemember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                    </div>
                    </div>
                    <div>
                    <!-- Forgot password -->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                    
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                <!-- Register -->
                <p>Not a member?
                    <a href="#">Register</a>
                </p>

                <!-- Social login -->
                <p>or sign in with:</p>
                <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fab fa-github"></i>
                </a>

                </form>
                <!-- Form -->

            </div>

            </div>
            <!-- Material form login -->
        </div>
    </div>
@endsection


