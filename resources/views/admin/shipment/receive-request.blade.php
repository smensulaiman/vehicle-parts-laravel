@php use App\Enums\ShipmentStatus;use App\Utils\CarBrandUtils; @endphp
@extends('admin.layouts.master')

@php
    $carBrandUtils = new CarBrandUtils()
@endphp

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h4 class="content-title">Receive Shipment</h4>
        </div>

        <div class="row">
            <div class="col-xxl-10 col-xl-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title">Total Vehicles {{ count($shipment->vehicles) }}</h6>
                        <div class="row">
                            <div class="col-xxl-4 col-xl-12">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="provider" name="provider"
                                               value="{{ $shipment->provider }}"
                                               placeholder="{{ $shipment->provider }}">
                                        <label for="provider">Provider</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="shippingPort" name="shipping-port"
                                               value="{{ $shipment->shipping_port }}"
                                               placeholder="{{ $shipment->shipping_port }}">
                                        <label for="shippingPort">Shipping Port</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="destinationPort"
                                               name="destination-port"
                                               value="{{ $shipment->destination_port }}"
                                               placeholder="{{ $shipment->destination_port }}">
                                        <label for="destinationPort">Destination Port</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="selectStatus" name="status">
                                            @foreach(ShipmentStatus::cases() as $status)
                                                <option value="{{ $status->value }}" {{ $shipment->status === $status->value ? 'selected' : '' }} >{{ strtoupper(str_replace('_', ' ', $status->value)) }}</option>
                                            @endforeach
                                        </select>
                                        <label for="selectStatus">Status</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="exchangeRate"
                                               name="exchange-rate"
                                               value="{{ intval($shipment->exchange_rate) === 1 ? 200 : $shipment->exchange_rate}}"
                                               placeholder="{{ $shipment->exchange_rate }}">
                                        <label for="exchangeRate">Exchange Rate</label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary text-center">Update Shipment</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xxl-8 col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-striped vehicle-table mb-0">
                                        <thead class="table-light">
                                        <tr class="border-1 text-center">
                                            <th width="60" class="align-middle" scope="col">S/N</th>
                                            <th width="80" class="align-middle" scope="col">Logo</th>
                                            <th class="align-middle" scope="col">Make</th>
                                            <th class="align-middle" scope="col">Model</th>
                                            <th width="100" class="align-middle" scope="col">Year</th>
                                            <th class="align-middle" scope="col">Purchase Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($shipment->vehicles))
                                            @foreach($shipment->vehicles as $vehicle)
                                                <tr>
                                                    <td class="text-center">{{$loop->index + 1}}</td>
                                                    <td class="d-flex justify-content-center align-items-center">
                                                        <img src="{{ $carBrandUtils->getCarThumbnail(strtolower($vehicle->make_title)) }}" alt="" width="40"/>
                                                    </td>
                                                    <td class="fw-bold">{{$vehicle->make_title}}</td>
                                                    <td>{{$vehicle->model_title}}</td>
                                                    <td class="text-center"><span>{{$vehicle->veh_year}}</span></td>
                                                    <td class="fw-bold text-primary-dark text-end">¥{{ number_format($vehicle->purchase_price ?? 0) }}</td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
