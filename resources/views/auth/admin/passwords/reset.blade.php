@extends('auth.agent.auth-layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 prulife bg-login-image"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Reset Password</h4>
                                </div>
                                @include('layouts.form-errors')
                                <form class="user" method="POST" action="{{ route('admin.password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                        <input id="email" class="form-control form-control-user @error('email') is-invalid @enderror" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label id="password" for="password" class="">{{ __('Password') }}</label>
                                        <input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password" >
                                    </div>
                                     <div class="form-group">
                                         <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    </div>
                                    <button class="btn prulife-btn-primary btn-block text-white btn-user" type="submit">Reset Password</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
