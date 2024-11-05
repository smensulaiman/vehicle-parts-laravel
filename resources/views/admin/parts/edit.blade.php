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
            <div class="col-xxl-8 col-lg-12 col-md-12">
                <form action="" method="POST">
                    <div class="card px-0">
                        <header class="card-header">
                            <div class="card mb-4">
                                <div class="card-header bg-brand-2" style="height: 150px"></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl col-lg flex-grow-0" style="flex-basis: 230px">
                                            <div class="img-thumbnail shadow-sm w-100 bg-white position-relative text-center" style="height: 190px; width: 200px; margin-top: -120px">
                                                <img src="{{ $brandLogo }}" class="center-xy img-thumbnail" alt="Logo Brand">
                                            </div>
                                        </div>
                                        <div class="col-xl col-lg">
                                            <h3>{{ $parts->first()->vehicle->make_title }}</h3>
                                            <p>{{ $parts->first()->vehicle->model_title }}</p>
                                        </div>
                                        <div class="col-xl col-lg text-md-end">
                                            <a href="#" class="btn btn-primary"> View Shipping </a>
                                        </div>
                                    </div>
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
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Part Name</th>
                                            <th>Barcode</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($parts as $part)
                                            <tr class="border-1">
                                                <td class="text-center border-1" width="40">{{ $part->partName->id }}</td>
                                                <td class="border-1 fw-bold" width="100">{{ $part->vehicle->make_title }}</td>
                                                <td class="border-1 fw-bold" width="100">{{ $part->vehicle->model_title }}</td>
                                                <td class="border-1 fw-bold">{{ $part->partName->name }}</td>
                                                <td>
                                                    @php
                                                        echo DNS1D::getBarcodeHTML(sprintf('%03d', $part->vehicle->id). sprintf('%03d', $part->id) , 'C39', 2, 50, 'black', false);
                                                        //echo sprintf('%03d', $part->vehicle->id). sprintf('%03d', $part->id);
                                                        //echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG(sprintf('%03d', $part->vehicle->id). sprintf('%03d', $part->id), 'C39', 2, 33, array(1,1,1), false) . '" alt="barcode"   />';
                                                    @endphp
                                                </td>
                                                <td width="40">
                                                    <input class="form-control text-end" type="text"
                                                           value="{{ $part->quantity }}"/></td>
                                                <td>
                                                    <input class="form-control text-end" type="text"
                                                           value="{{ $part->price }}"/>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="text-success add-to-cart"
                                                       data-id="{{ $part->partName->id }}"
                                                       data-name="{{ $part->partName->name }}"
                                                       data-quantity="{{ $part->quantity }}"
                                                       data-price="{{ $part->price }}">Add to cart</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.part.print', $vehicleId) }}" class="btn btn-primary"
                               target="_blank"><i class="text-muted my-auto material-icons md-barcode"></i>PRINT BARCODE</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.4/dist/flasher.min.js"></script>
    <script>
        const cartStoreUrl = '{{ route('admin.cart.store') }}';
        const csrfToken = '{{ csrf_token() }}';
    </script>
    <script defer src="{{ asset('assets/js/cart.js') }}"></script>
@endpush

