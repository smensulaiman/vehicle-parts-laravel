@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Parts Categories {{$name}}</h2>
            </div>
            <div>
                <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div class="card mb-4">
                    <header class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                                <h6 class="card-title">Total Vehicles</h6>
                            </div>
                            <div class="col-md-2 col-6">
                                <input type="date" class="form-control"/>
                            </div>
                        </div>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th class="align-middle" scope="col">S/N</th>
                                        <th class="align-middle" scope="col">Part Name</th>
                                        <th class="align-middle" scope="col">Default Quantity</th>
                                        <th class="align-middle" scope="col">Default Price</th>
                                        <th class="align-middle" scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($partNames))
                                        @foreach($partNames as $partName)
                                            <tr>
                                                <td><a href="#" class="fw-bold">#{{$partName->id}}</a></td>
                                                <td>{{$partName->name}}</td>
                                                <td>{{$vehicle->model_title}}</td>
                                                <td>{{$vehicle->chassis_model}}</td>
                                                <td>{{$vehicle->chassis_number}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-xs">Parts details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="text-center">
                                            <td class="text-danger" colspan="5">No Data</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- table-responsive end// -->
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
