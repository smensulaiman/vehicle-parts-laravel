@extends('admin.layouts.master')

@section('content')
    <section class="content-main p-4">
        {{-- Filtering part --}}
        <div class="row">
            <div class="col-xxl-6">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-xl-12 col-sm-12 mt-2">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="make" class="pb-1 ps-1 fw-bold text-primary">Make</label>
                                            <select class="form-select p-2" multiple name="make[]" id="make" style="height: 20rem; overflow-y: auto;">
                                                <option disabled>Select Make</option>
                                                @foreach($makers as $make)
                                                    <option class="p-2" value="{{ $make->make_id }}">{{ $make->make_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="make" class="pb-1 ps-1 fw-bold text-primary">Model</label>
                                            <select class="form-select p-2" multiple name="model[]" id="model" style="height: 20rem;overflow-y: scroll;">
                                                <option disabled>Select Model</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="make" class="pb-1 ps-1 fw-bold text-primary">Part Name</label>
                                            <select class="form-select p-2" multiple
                                                    aria-label="multiple select example"
                                                    name="make" id="make" style="height: 20rem;overflow-y: scroll;">
                                                <option class="p-2" disabled>Select Menu</option>
                                                @foreach($partNames as $partName)
                                                    <option class="p-2"
                                                            value="{{ $partName->id }}">{{ $partName->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    {{$dataTable->table()}}
                                </div>
                            </div>
                        </div>
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xxl-12 col-xl-12 col-sm-12">--}}
{{--                                    <header>--}}
{{--                                        <h4 class="d-flex align-items-center justify-content-center">--}}
{{--                                        <span>--}}
{{--                                            <i class="fas fa-list"></i>--}}
{{--                                        </span>--}}
{{--                                            <span class="ms-2">Items List</span>--}}
{{--                                        </h4>--}}
{{--                                    </header>--}}
{{--                                    <div class="table-responsive pt-3">--}}
{{--                                        <table class="table table-hover">--}}
{{--                                            <thead class="table-light">--}}
{{--                                            <tr class="text-center">--}}
{{--                                                <th scope="col">#SN</th>--}}
{{--                                                <th scope="col">Item</th>--}}
{{--                                                <th scope="col">Price</th>--}}
{{--                                                <th scope="col">Quantity</th>--}}
{{--                                                <th scope="col">Action</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody class="text-center">--}}
{{--                                            <tr>--}}
{{--                                                <td scope="row"><a href="#" class="fw-bold">#1</a></td>--}}
{{--                                                <td>Mark</td>--}}
{{--                                                <td>¥299.99</td>--}}
{{--                                                <td>700</td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="#" class="btn btn-md rounded font-sm">--}}
{{--                                                        <i class="fas fa-shopping-cart"></i></a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td scope="row"><a href="#" class="fw-bold">#2</a></td>--}}
{{--                                                <td>Jacob</td>--}}
{{--                                                <td>¥299.99</td>--}}
{{--                                                <td>400</td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="#" class="btn btn-md rounded font-sm">--}}
{{--                                                        <i class="fas fa-shopping-cart"></i></a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td scope="row"><a href="#" class="fw-bold">#3</a></td>--}}
{{--                                                <td>Larry the Bird</td>--}}
{{--                                                <td>¥299.99</td>--}}
{{--                                                <td>300</td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="#" class="btn btn-md rounded font-sm">--}}
{{--                                                        <i class="fas fa-shopping-cart"></i>--}}
{{--                                                    </a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- Checkout Part 2 -->
            <div class="col-xxl-6">
                <div class="card bg-warning-subtle">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <header>
                                    <h4 class="d-flex align-items-center justify-content-center">
                                        <span>
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                        <span class="ms-2">Your cart has {{ $cartContent->count() }} item(s)</span>
                                    </h4>
                                </header>
                                <!-- Cart Content -->
                                <div class="table-responsive pt-3">

                                    <table class="table">
                                        <thead class="table-light">
                                        <tr class="border-bottom text-center">
                                            <th scope="col">#SN</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody class="text-center">
                                        @foreach($cartContent as $cartItem)
                                            <tr class="border-bottom">
                                                <td scope="row">
                                                    <a href="#" class="fw-bold">#{{ $loop->index + 1 }}</a>
                                                </td>
                                                <td>
                                                    <img style="height:4rem; width:4rem; object-fit: contain;"
                                                         src="{{ asset('/assets/imgs/car-parts/tier.jpg') }}"
                                                         alt="{{ $cartItem->name }}"
                                                         class="img-fluid">
                                                </td>
                                                <td class="text-start">
                                                    <p>{{ $cartItem->name }}</p>
                                                    <p>¥{{ $cartItem->price }}</p>
                                                </td>
                                                <td>
                                                    <div class="input-group d-flex justify-content-center">
                                                        <a href="#" class="btn btn-light btn-sm fw-bold">-</a>
                                                        <input type="number" class="form-control text-center"
                                                               value="{{ $cartItem->qty }}" style="width: 1rem;">
                                                        <a href="#" class="btn btn-light btn-sm fw-bold">+</a>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <p>¥{{ $cartItem->price * $cartItem->qty }}</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-instagram rounded font-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Lower Part Of checkout -->
                                <div class="row px-3 d-flex justify-content-end">
                                    <div class="col-lg-6">
                                        <div class="row  border-bottom py-2">
                                            <h6 class="col-sm-9 col-8">Subtotal:</h6>
                                            <p class="col-sm-3 col-4">¥ {{ $totalPrice }}</p>
                                        </div>
                                        <div class="row py-2">
                                            <h6 class="col-sm-9 col-8">Total:</h6>
                                            <p class="col-sm-3 col-4">¥ {{ $totalPrice }}</p>
                                        </div>
                                        <div class="row py-2">
                                            <button
                                                class="btn btn-md rounded font-sm text-center d-flex align-items-center justify-content-center fw-bold">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="ms-2">CHECKOUT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        $(document).ready(function() {
            $('#make').on('change', function() {
                let selectedMakes = $(this).val();

                $.ajax({
                    url: '{{ route("admin.vehicle.models") }}',
                    method: 'GET',
                    data: { makes: selectedMakes },
                    success: function(data) {
                        $('#model').empty();
                        $.each(data.models, function(index, model) {
                            $('#model').append(new Option(model.model_title, model.model_id));
                        });
                    },
                    error: function(xhr) {
                        console.error('Error fetching models:', xhr);
                    }
                });
            });
        });
    </script>
@endpush
