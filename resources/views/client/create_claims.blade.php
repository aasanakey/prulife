@extends('layouts.client.layout')
@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
@endsection
@section('content')
<div class="container-fluid">
    {{-- <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Clients</h3>
        <a class="btn btn-sm d-none d-sm-inline-block prulife-btn-primary" role="button" href="#" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;Add Client
        </a>
    </div> --}}
    @include('layouts.messages')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-prulife m-0 font-weight-bold">Claim Info</p>
        </div>
        <div class="card-body">
            <form id="form" action="{{route('user.claim.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="policy_holder">Policy Holder</label>
                    <input id="policy_holder" class="form-control @error('policy_holder') is-invalid @enderror" type="text" name="policy_holder" value="{{old('policy_holder') ? old('policy_holder') : auth()->user()->firstname.' '.auth()->user()->lastname}}" placeholder="policy_holder" disabled>
                    @error('policy_holder')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="policy">Policy</label>
                        <input id="policy" class="form-control @error('policy') is-invalid @enderror" type="text" name="policy" value="{{old('policy')}}" placeholder="Policy">
                        @error('policy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="incident_date">Incident Date & Time</label>
                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                            <input type="text" name="incident_date" class="form-control datetimepicker-input  @error('incident_date') is-invalid @enderror"
                            placeholer="Expiry Date" data-target="#datetimepicker1" autocomplete="incident_date" />
                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            @error('incident_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="textarea-noresize ckeditor form-control @error('description') is-invalid @enderror" name="description" placeholder="Description">{{old('description')}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div class="form-group">
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
                </div> --}}
                <button class="btn prulife-btn-primary " type="submit">submit</button>
                                        
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
    <!-- phone datetime picker cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    {{-- ckeditor cdn --}}
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            $('#datetimepicker1').datetimepicker({
                // format: 'L',
                defaultDate: "{{ old('expiry_date') }}",
            });
        $('.ckeditor').ckeditor();

        });

    </script>
@endsection
