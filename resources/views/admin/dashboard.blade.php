@php use App\Models\Shipment;use App\Models\Vehicle; @endphp
@extends('admin.layouts.master')

@section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
                <p>Whole data about your business here</p>
            </div>
            <div>
                <a href="#" class="btn btn-primary">
                    <i class="text-muted my-auto material-icons md-barcode"></i>
                    <span>GENERATE BARCODE</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Revenue</h6>
                            <span>$--,---</span>
                            <span class="text-sm"> Shipping fees are not included </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-directions_boat"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Shipping</h6>
                            <span>{{ Shipment::count() }}</span>
                            <span class="text-sm"> Including shipping in transit </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Vehicles</h6>
                            <span>{{ Vehicle::count() }}</span>
                            <span class="text-sm"> In {{ Shipment::count() }} Shipments </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Monthly Earning</h6>
                            <span>$--,---</span>
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
                        <h6 class="card-title">Latest Shipments</h6>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
