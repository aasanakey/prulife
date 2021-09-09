@extends('layouts.client.layout')
@section('styles')
    @parent
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" /> --}}
    {{-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"> --}}
    <style>
        .intl-tel-input,.iti {
            width:100%;
        }
        /* .nice-select{
            width: 100%;
        } */
    </style>
@endsection
@section('content')
    {{-- <div class="container-fluid"> --}}
        <h3 class="text-dark mb-4">Profile</h3>
        @include('layouts.messages')
        @include('layouts.form-errors')
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{asset($user->avatar)}}" width="160" height="160">
                        <form class="mb-3" action="{{route('user.profile.update',['user'=>$user])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" accept="image/*">
                                    <label class="custom-file-label" for="avatar">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn prulife-btn-primary btn-sm" type="submit">Change Photo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                        <div class="progress progress-sm mb-3">
                            <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                        </div>
                        <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                        <div class="progress progress-sm mb-3">
                            <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                        </div>
                        <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                        <div class="progress progress-sm mb-3">
                            <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                        </div>
                        <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                        <div class="progress progress-sm mb-3">
                            <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                        </div>
                        <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                        <div class="progress progress-sm mb-3">
                            <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-8">
                {{-- <div class="row mb-3 d-none">
                    <div class="col">
                        <div class="card text-white bg-primary shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">User Settings</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('user.profile.update',['user'=>$user->id])}}">
                                    @csrf
                                    @method('put')
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="firstname"><strong>First Name</strong></label><input class="form-control @error('firstname') is-invalid @enderror" type="text" placeholder="First Name" value="{{old('firstname') ? old('firstname') : $user->firstname}}" name="firstname"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="lastname"><strong>Last Name</strong></label><input class="form-control @error('lastname') is-invalid @enderror" type="text" placeholder="Last Name" name="lastname" value="{{old('lastname') ? old('lastname') : $user->lastname}}"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="phone"><strong>Phone</strong></label><input class="form-control @error('phone') is-invalid @enderror" type="tel" placeholder="" name="" value="{{old('phone') ? old('phone') : $user->phone}}"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="user@example.com" name="email" value="{{old('email') ? old('email') : $user->email}}"></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn prulife-btn-primary btn-sm" type="submit">Save Settings</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                            </div>
                            <div class="card-body">
                                <form action="{{route('user.profile.update',['user'=>$user->id])}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control @error('address') is-invalid @enderror" type="text" placeholder="eg. Sunset Blvd, 38" name="address" value="{{old('address') ? old('address') : $user->address}}"></div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="country"><strong>Country</strong></label>
                                                <select name="country" id="country" class="form-control @error('country') is-invalid @enderror">
                                                    @if(!$countries->isEmpty() && is_null($user->country_id))
                                                        <option value="">Select a country</option>
                                                    @endif
                                                    @forelse ($countries as $country)
                                                        <option value="{{$country->id}}" @if($user->country_id == $country->id) selected @elseif(old('country') == $country->id) selected @endif>{{ucwords($country->name)}}</option>
                                                    @empty
                                                        <option>No countries available</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="state"><strong>State</strong></label>
                                                <select name="state" id="state" class="form-control @error('state') is-invalid @enderror">
                                                    @if($user->state_id)
                                                    <option value="{{$user->state_id}}">{{ucwords($user->state->name)}}</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>City</strong></label>
                                                <select name="city" id="city" class="form-control @error('city') is-invalid @enderror">
                                                    @if($user->city_id)
                                                    <option value="{{$user->city_id}}">{{ucwords($user->city->name)}}</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group"><button class="btn prulife-btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card shadow mb-5">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Forum Settings</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group"><label for="signature"><strong>Signature</strong><br></label><textarea class="form-control" rows="4" name="signature"></textarea></div>
                            <div class="form-group">
                                <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
@endsection
@section('scripts')
@parent
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
        <!-- phone input cdn -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js"
    integrity="sha512-QK4ymL3xaaWUlgFpAuxY+6xax7QuxPB3Ii/99nykNP/PlK3NTQa/f/UbQQnWsM4h5yjQoMjWUhCJbYgWamtL6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> --}}

    <script>
        bsCustomFileInput.init();
        var phoneInput = $("input[type='tel']")
        phoneInput.intlTelInput({
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
        // $('#datetimepicker1').datetimepicker({
        //     format: 'L',
        //     defaultDate: "{{ old('expiry_date') }}",
        // });
        // $('#datetimepicker2').datetimepicker({
        //     format: 'L',
        //     defaultDate: "{{ old('renewal_date') }}",
        // });

        $('#country').on('change', function() {
            var country_id = this.value;
            $("#state").html('');
            if (country_id != '') {
                $.ajax({
                    url:"{{route('state')}}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        $("#state").append('<option value="">Select a State</option>');
                        $.each(result.states,function(key,value){
                            $("#state").append('<option value="'+value.id+'">'+ucwords(value.name)+'</option>');
                            });
                            $('#city').html('<option value="">Select State First</option>');
                        }
                });
            }

        });
        $('#state').on('change', function() {
            var state_id = this.value;
            $("#city").html('');
            if(state_id != ''){
                $.ajax({
                    url:"{{route('city')}}",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType : 'json',
                    success: function(result){
                        $("#city").append('<option value="">Select a City</option>');
                        $.each(result.cities,function(key,value){
                            $("#city").append('<option value="'+value.id+'">'+ucwords(value.name)+'</option>');
                        });
                    }
                });
            }
        });
        function ucwords(sentence){
            var words = sentence.split(' ').map(function(str){
                return str[0].toUpperCase() + str.slice(1).toLowerCase() ||
                str.charAt(0).toUpperCase()+ str.slice(1).toLowerCase();
            });
            return words.join(' ');
        }
    </script>
@endsection

