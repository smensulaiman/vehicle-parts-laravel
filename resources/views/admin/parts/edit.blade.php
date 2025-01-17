@extends('admin.layouts.master')

@section('content')

    @php
        $vehicleId = -1;
        if(count($parts) > 0){
            $vehicleId = $parts->first()->vehicle->id;
        }
    @endphp

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Edit Part</h2>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-12">
                <form action="" method="POST">
                    <div class="card px-0">
                        <header class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                                    <h6 class="card-title">Total Parts</h6>
                                </div>
                            </div>
                        </header>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary-subtle">
                                        <tr>
                                            <th class="text-center">S/N</th>
                                            <th>Part Name</th>
                                            <th>Barcode</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($parts as $part)
                                            <tr>
                                                <td class="text-center" width="24">{{ $part->partName->id }}</td>
                                                <td>{{ $part->partName->name }}</td>
                                                <td>
                                                    @php
                                                        echo DNS1D::getBarcodeHTML(sprintf('%03d', $part->vehicle->id). sprintf('%03d', $part->id) , 'C39', 2, 50, 'black', false);
                                                        //echo sprintf('%03d', $part->vehicle->id). sprintf('%03d', $part->id);
                                                        //echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG(sprintf('%03d', $part->vehicle->id). sprintf('%03d', $part->id), 'C39', 2, 33, array(1,1,1), false) . '" alt="barcode"   />';
                                                    @endphp
                                                </td>
                                                <td width="40"><input class="form-control text-end" type="text"
                                                                      value="{{ $part->quantity }}"/></td>
                                                <td><input class="form-control text-end" type="text"
                                                           value="{{ $part->price }}"/></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.part.print', $vehicleId) }}" class="btn btn-primary" target="_blank"><i class="text-muted my-auto material-icons md-barcode"></i>PRINT BARCODE</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
