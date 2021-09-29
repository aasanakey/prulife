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
                                    <h4 class="text-dark mb-4">Request For Password Reset</h4>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @include('layouts.form-errors')
                                <form class="user" action="{{ route('admin.password.email') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">E-mail Address</label>
                                        <input id="email" class="form-control form-control-user @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address..." required autofocus>
                                    </div>
                                    <button class="btn btn-block text-white btn-user btn-prulife-primary" type="submit">Submit</button>
                                </form>
                                <div class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
