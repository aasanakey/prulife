@extends('layouts.client.layout')
@section('styles')
    @parent
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
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

<div class="container-fluid">
    {{-- <h3 class="text-dark mb-4">Product</h3> --}}
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Claims</h3>
        <a class="btn btn-sm d-none d-sm-inline-block prulife-btn-primary" role="button" href="#" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;Add Claim
        </a>
    </div>
@include('layouts.messages')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-prulife m-0 font-weight-bold">Insurance Claims</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="prospectsTable">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Lead</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($claims as $claim)
                            <tr>
                                <td>{{$claim->firstname}}</td>
                                <td>{{$claim->lastname}}</td>
                                <td>{{$claim->email}}</td>
                                <td>{{$claim->phone}}</td>
                                <td>{{$claim->pivot->lead}}</td>
                                <td><button class="btn prulife-btn-primary" data-toggle="tooltip" data-bss-tooltip="" type="button" title="Edit"><i class="fas fa-pen"></i></button><button class="btn prulife-btn-primary" data-toggle="tooltip" data-bss-tooltip="" type="button" title="Delete"><i class="fas fa-trash"></i></button></td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Lead</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form id="form" action="{{route('agent.prospects')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input id="firstname" class="form-control @error('firstname') is-invalid @enderror" type="text" name="firstname" value="{{old('firstname')}}" placeholder="Firstname">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{old('lastname')}}" placeholder="Lastname">
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="tel" name="phone" value="{{old('phone')}}" placeholder="">
                                @error('phone')
                                    <span class="invalid-feedback text-danger d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" class="textarea-noresize form-control @error('address') is-invalid @enderror" name="address" cols="3" placeholder="Home/Office Address">{{old('address')}}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lead">Lead Type</label>
                                <select id="lead" class="form-control @error('lead') is-invalid @enderror" name="lead" value="{{old('lead')}}" >
                                    <option value=''></option>
                                    <option value='cold' {{old('lead') == 'cold' ? 'selected' : ''}}>cold lead</option>
                                    <option value='warm' {{old('warm') == 'warm' ? 'selected' : ''}}>warm lead</option>
                                    <option value='hot' {{old('lead') == 'hot' ? 'selected' : ''}}>hot lead</option>
                                    <option value='sales-ready' {{old('lead') == 'cold' ? 'selected' : ''}}>sales ready lead</option>
                                    <option value='marketing-qualified' {{old('lead') == 'marketing-qualified' ? 'selected' : ''}}>marketing qualified lead</option>
                                    <option value='sales-qualified' {{old('lead') == 'sales-qualified' ? 'selected' : ''}}>sales qualified lead</option>
                                    <option value='customer' {{old('lead') == 'customer' ? 'selected' : ''}}>customer</option>
                                </select>
                                @error('lead')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('form').submit()">Save</button>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
@section('scripts')
@parent
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
        <!-- phone input cdn -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js"
integrity="sha512-QK4ymL3xaaWUlgFpAuxY+6xax7QuxPB3Ii/99nykNP/PlK3NTQa/f/UbQQnWsM4h5yjQoMjWUhCJbYgWamtL6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#prospectsTable').DataTable( {
                dom: 'Bfrtip',
                buttons: {
                    buttons: [
                        {extend: 'copyHtml5', className: 'btn btn-sm prulife-btn-primary'},
                        {extend: 'excelHtml5', className: 'btn btn-sm prulife-btn-primary'},
                        {extend: 'csvHtml5', className: 'btn btn-sm prulife-btn-primary'},
                        {extend: 'pdfHtml5', className: 'btn btn-sm prulife-btn-primary'},
                    ],
                    dom: {
                        button: {
                            className: 'btn'
                        }
                    }
                },
            } );
        } );
        var phoneInput = $("input[type='tel']")
        phoneInput.intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
            initialCountry: "auto",
            nationalMode: true,
            // hiddenInput:"phone",
            separateDialCode: true,
            geoIpLookup: function (callback) {
                $.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
        });
        @if ($errors->any())
            $('#formModal').modal('show');
        @endif
    </script>
@endsection
