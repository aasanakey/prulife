@extends('layouts.site')
{{-- @section('site-contetn')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
@section('site-content')
<section class="login-section d-flex flex-column align-content-center">
    @include('layouts.form-errors')
    <div class="row">
        <form class="col-sm-12 col-md-6 col-lg-4" action="{{route('login')}}" method="post" style="padding-top: 1em;padding-right: 1em;padding-bottom: 1em;padding-left: 5%;">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group">
                <label class="text-white">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" placeholder="Email" autocomplete="email">
            </div>
            <div class="form-group">
                <label class="text-white">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="current-password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block prulife-btn-primary" type="submit">Log In</button>
            </div>
            @if (Route::has('password.request'))
            <a class="text-white forgot" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
        </form>
    </div>
</section>
@endsection
