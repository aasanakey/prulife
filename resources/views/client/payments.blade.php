@extends('layouts.client.layout')
@section('styles')
    @parent
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
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Payments</h3>
    </div>
    @include('layouts.messages')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-prulife m-0 font-weight-bold">Payments</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="clientsTable">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Amount Paid</th>
                            <th>Balance</th>
                            <th>Method</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($payments as $payment)
                            <tr>
                                <td>{{$payment->policy->plan->name}}</td>
                                <td>{{$payment->fee}}</td>
                                <td>{{$payment->amount_paid}}</td>
                                <td>{{$payment->balance}}</td>
                                <td>{{$payment->method}}</td>
                                <td>{{$payment->date}}</td>
                                <td><button class="btn prulife-btn-primary" data-toggle="tooltip" data-bss-tooltip="" type="button" title="Edit"><i class="fas fa-eye"></i></button></td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Amount Paid</th>
                            <th>Balance</th>
                            <th>Method</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
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

    </script>
@endsection
