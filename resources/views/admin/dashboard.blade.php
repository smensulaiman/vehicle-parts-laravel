@php use App\Models\Shipment; @endphp

@extends('admin.layouts.master')

@section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
                <p>Whole data about your business here</p>
            </div>
            <div>
                <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create
                    report</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Revenue</h6>
                            <span>$13,456.5</span>
                            <span class="text-sm"> Shipping fees are not included </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Orders</h6>
                            <span>53.668</span>
                            <span class="text-sm"> Excluding orders in transit </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Products</h6>
                            <span>9.856</span>
                            <span class="text-sm"> In 19 Categories </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Monthly Earning</h6>
                            <span>$6,982</span>
                            <span class="text-sm"> Based in your local time. </span>
                        </div>
                    </article>
                </div>
            </div>
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
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th scope="col" class="text-center">
                                    <div class="form-check align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01"/>
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle" scope="col">Booking ID</th>
                                <th class="align-middle" scope="col">Provider Name</th>
                                <th class="align-middle" scope="col">Departure Date</th>
                                <th class="align-middle" scope="col">Destination Port</th>
                                <th class="align-middle" scope="col">Vessel</th>
                                <th class="align-middle" scope="col">Status</th>
                                <th class="align-middle" scope="col">Shipping Port</th>
                                <th class="align-middle" scope="col">Customer</th>
                                <th class="align-middle" scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($shipments))
                                @foreach($shipments as $shipment)
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                       id="transactionCheck02"/>
                                                <label class="form-check-label" for="transactionCheck02"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#VPMS{{$shipment->id}}</a></td>
                                        <td>{{$shipment->provider}}</td>
                                        <td>{{$shipment->departure}}</td>
                                        <td>{{$shipment->destination_port}}</td>
                                        <td>{{$shipment->vessel}}</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success">Shipped</span>
                                        </td>
                                        <td>{{$shipment->shipping_port}}</td>
                                        <td>{{$shipment->invoice_customer}}</td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>No Data</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table-responsive end// -->
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
