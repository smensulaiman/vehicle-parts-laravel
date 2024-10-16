@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Shipments</h2>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <h6 class="card-title">Total Shipments {{$totalShipment}}</h6>
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
