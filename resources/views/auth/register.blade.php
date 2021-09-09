@extends('layouts.site')
@section('styles')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<style>
.intl-tel-input,.iti {
    width:100%;
}
.nice-select{
    width: 100%;
}
</style>
@endsection
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@section('site-content')
<section class="register-section d-flex flex-column  align-content-center">
    @include('layouts.form-errors')
    <div class="row">
        <form class="col-sm-12 col-md-6 col-lg-4" action="{{route('register')}}" method="post" style="padding-top: 1em;padding-right: 1em;padding-bottom: 1em;padding-left: 5%;">
            @csrf
            <h2 class="sr-only">Registration Form</h2>
            <div class="form-group">
                <label class="text-white">Firstname</label>
                <input class="form-control @error('firstname') is-invalid @enderror" type="text" name="firstname" value="{{old('firstname')}}" placeholder="Firstname">
            </div>
            <div class="form-group">
                <label class="text-white">Lastname</label>
                <input class="form-control @error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{old('lastname')}}" placeholder="Lastname">
            </div>
            <div class="form-group">
                <label class="text-white">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="text-white">Phone Number</label>
                <input class="form-control @error('phone') is-invalid @enderror" type="tel" name="phone" value="{{old('phone')}}" placeholder="">
            </div>
            <div class="form-group">
                <label class="text-white">Address</label>
                <textarea class="textarea-noresize form-control @error('address') is-invalid @enderror" name="address"  cols="3" placeholder="Home/Office Address">{{old('address')}}</textarea>
            </div>
            <div class="form-group">
                <label class="text-white">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input @error('terms') is-invalid @enderror" name="terms" {{ old( 'terms') ? 'checked' : '' }} type="checkbox" id="formCheck-1">
                    <label class="form-check-label text-white" for="formCheck-1">
                        I accept the <a href="#">Terms of service</a>&nbsp;&amp;&nbsp;<a href="#">Privacy Policy</a>.
                    </label>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-block prulife-btn-primary" type="submit">Register</button></div>
        </form>
    </div>
</section>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js" integrity="sha512-QK4ymL3xaaWUlgFpAuxY+6xax7QuxPB3Ii/99nykNP/PlK3NTQa/f/UbQQnWsM4h5yjQoMjWUhCJbYgWamtL6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $("input[type='tel']").intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
            initialCountry: "auto",
            nationalMode: true,
            hiddenInput:"phone",
            separateDialCode: true,
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
        });
    });
</script>
@endsection
