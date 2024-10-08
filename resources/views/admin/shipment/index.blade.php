@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Import Shipment</h2>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <h6 class="card-title">Total Shipments {{count($shipments)}}</h6>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" class="form-control"/>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="custom_select">
                            <select class="form-select select-nice">
                                <option selected>Status</option>
                                <option>All</option>
                                <option>Paid</option>
                                <option>Chargeback</option>
                                <option>Refund</option>
                            </select>
                        </div>
                    </div>
                </div>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="table-responsive">
                        {{$dataTable->table()}}
{{--                        <table class="table align-middle table-nowrap mb-0">--}}
{{--                            <thead class="table-light">--}}
{{--                            <tr>--}}
{{--                                <th scope="col" class="text-center">--}}
{{--                                    <div class="form-check align-middle">--}}
{{--                                        <input class="form-check-input" type="checkbox" id="transactionCheck01"/>--}}
{{--                                        <label class="form-check-label" for="transactionCheck01"></label>--}}
{{--                                    </div>--}}
{{--                                </th>--}}
{{--                                <th class="align-middle" scope="col">Booking ID</th>--}}
{{--                                <th class="align-middle" scope="col">Provider Name</th>--}}
{{--                                <th class="align-middle" scope="col">Departure Date</th>--}}
{{--                                <th class="align-middle" scope="col">Destination Port</th>--}}
{{--                                <th class="align-middle" scope="col">Vessel</th>--}}
{{--                                <th class="align-middle" scope="col">Status</th>--}}
{{--                                <th class="align-middle" scope="col">Shipping Port</th>--}}
{{--                                <th class="align-middle" scope="col">Customer</th>--}}
{{--                                <th class="align-middle" scope="col">Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @if(!empty($shipments))--}}
{{--                                @foreach($shipments as $shipment)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-center">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox"--}}
{{--                                                       id="transactionCheck02"/>--}}
{{--                                                <label class="form-check-label" for="transactionCheck02"></label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="#" class="fw-bold">#VPMS{{$shipment->id}}</a></td>--}}
{{--                                        <td>{{$shipment->provider}}</td>--}}
{{--                                        <td>{{$shipment->departure}}</td>--}}
{{--                                        <td>{{$shipment->destination_port}}</td>--}}
{{--                                        <td>{{$shipment->vessel}}</td>--}}
{{--                                        <td>--}}
{{--                                            <span class="badge badge-pill badge-soft-success">Shipped</span>--}}
{{--                                        </td>--}}
{{--                                        <td>{{$shipment->shipping_port}}</td>--}}
{{--                                        <td>{{$shipment->invoice_customer}}</td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="btn btn-xs">Vehicle details</a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <tr>--}}
{{--                                    <td>No Data</td>--}}
{{--                                </tr>--}}
{{--                            @endif--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
                    </div>
                </div>
                <!-- table-responsive end// -->
            </div>
        </div>

    </section>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
