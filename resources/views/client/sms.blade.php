@extends('layouts.client.layout')
@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <style>
        .intl-tel-input,.iti {
            width:100%;
        }
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">SMS</h3>
        <a class="btn btn-sm d-none d-sm-inline-block prulife-btn-primary" role="button" href="#" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;New SMS
        </a>
    </div>
    @include('layouts.messages')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-prulife m-0 font-weight-bold">SMS messages</p>
        </div>
        <div class="card-body d-flex flex-colum align-items-center justify-content-center">
            @forelse ($messages as $message)
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link btn prulife-btn-primary btn-sm"><i class="fas fa-eye"></i>Another link</a>
                            </div>
                        </div>
                    </li>
                </ul>
            @empty
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="fas fa-exclamation-circle fa-7x"></i></h5>
                        <p class="card-text">You have no messages</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Compose SMS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form id="form" action="{{route('user.communications')}}" method="post">
                            @csrf
                            <input type="hidden" name="channel" value="sms">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input  class="form-control @error('message') is-invalid @enderror" type="text" id="subject" name="subject" value="{{old('subject')}}">
                                @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="textarea-noresize form-control @error('message') is-invalid @enderror" name="message" placeholder="">{{old('message')}}</textarea>
                                @error('message')
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
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#clientsTable').DataTable( {
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
        $('#datetimepicker1').datetimepicker({
            format: 'L',
            defaultDate: "{{ old('expiry_date') }}",
        });
        $('#datetimepicker2').datetimepicker({
            format: 'L',
            defaultDate: "{{ old('renewal_date') }}",
        });
        @if ($errors->any())
            $('#formModal').modal('show');
        @endif
    </script>
@endsection
