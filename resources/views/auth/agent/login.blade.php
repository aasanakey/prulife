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
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    @include('layouts.form-errors')
                                    <form class="user" method="POST" action="{{route('agent.login')}}">
                                        @csrf
                                        <div class="form-group"><input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" autocomplete="email"></div>
                                        <div class="form-group"><input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="exampleInputPassword" placeholder="Password" name="password" autocomplete="current-password"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" name="remember" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn prulife-btn-primary btn-block text-white btn-user" type="submit">Login</button>
                                        <hr>
                                    </form>
                                    @if (Route::has('password.request'))
                                    <div class="text-center"><a class="small" href="{{route('agent.password.request')}}">Forgot Password?</a></div>
                                    @endif
                                    {{-- <div class="text-center"><a class="small" href="register.html">Create an Account!</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

