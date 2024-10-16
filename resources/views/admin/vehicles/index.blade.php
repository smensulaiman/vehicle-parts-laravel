@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Vehicle List</h2>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <h6 class="card-title">Total Vehicles</h6>
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
                                <th class="align-middle" scope="col">S/N</th>
                                <th class="align-middle" scope="col">Make</th>
                                <th class="align-middle" scope="col">Model</th>
                                <th class="align-middle" scope="col">Chassis Model</th>
                                <th class="align-middle" scope="col">Chassis Number</th>
                                <th class="align-middle" scope="col">Grade</th>
                                <th class="align-middle" scope="col">Fuel</th>
                                <th class="align-middle" scope="col">Transmission</th>
                                <th class="align-middle" scope="col">Traction</th>
                                <th class="align-middle" scope="col">Millage</th>
                                <th class="align-middle" scope="col">CC</th>
                                <th class="align-middle" scope="col">Year</th>
                                <th class="align-middle" scope="col">Month</th>
                                <th class="align-middle" scope="col">Color</th>
                                <th class="align-middle" scope="col">Net Weight</th>
                                <th class="align-middle" scope="col">Gross Weight</th>
                                <th class="align-middle text-center" scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($vehicles))
                                @foreach($vehicles as $vehicle)
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                       id="transactionCheck02"/>
                                                <label class="form-check-label" for="transactionCheck02"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#{{$vehicle->id}}</a></td>
                                        <td>{{$vehicle->make_title}}</td>
                                        <td>{{$vehicle->model_title}}</td>
                                        <td>{{$vehicle->chassis_model}}</td>
                                        <td>{{$vehicle->chassis_number}}</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success">{{$vehicle->grade}}</span>
                                        </td>
                                        <td>{{$vehicle->veh_fuel}}</td>
                                        <td>{{$vehicle->veh_trans}}</td>
                                        <td>{{$vehicle->veh_traction}}</td>
                                        <td>{{$vehicle->veh_km}}</td>
                                        <td>{{$vehicle->veh_cc}}</td>
                                        <td><span class="badge badge-pill badge-soft-success">{{$vehicle->veh_year}}</span></td>
                                        <td><span class="badge badge-pill badge-soft-success">{{$vehicle->veh_month}}</span></td>
                                        <td>{{$vehicle->veh_color}}</td>
                                        <td>{{$vehicle->net_weight}}</td>
                                        <td>{{$vehicle->gross_weight}}</td>
                                        <td>
                                            <a href="{{ route('admin.part.edit', $vehicle->id) }}" class="btn btn-xs text-center">Parts details</a>
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

    </section>

@endsection
