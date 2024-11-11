@extends('admin.layouts.master')

@section('content')
    <section class="content-main p-4">
        <div class="content-header">
            <h4 class="content-title">POS</h4>
        </div>
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
                                            <select class="form-select p-2" multiple name="make[]" id="make"
                                                    style="height: 20rem; overflow-y: auto;">
                                                <option selected disabled>Select Make</option>
                                                @foreach ($makers as $make)
                                                    <option
                                                        value="{{ $make->make_id }}">{{ $make->make_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="model" class="pb-1 ps-1 fw-bold text-primary">Model</label>
                                            <select class="form-select p-2" multiple name="model[]" id="model"
                                                    style="height: 20rem; overflow-y: scroll;">
                                                <option selected disabled>Select Model</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="part" class="pb-1 ps-1 fw-bold text-primary">Part Name</label>
                                            <select class="form-select p-2" multiple name="part[]" id="part"
                                                    style="height: 20rem; overflow-y: scroll;">
                                                <option selected disabled>Select Part</option>
                                                @foreach ($partNames as $partName)
                                                    <option value="{{ $partName->id }}">{{ $partName->name }}</option>
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
                                    {{ $dataTable->table() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Checkout Part 2 -->
            <div class="col-xxl-6">
                <div class="card" style="background-color: rgba(59, 183, 126, 0.2);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <header>
                                    <input type="text">
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
                                        @foreach ($cartContent as $cartItem)
                                            <tr class="border-bottom">
                                                <td scope="row">
                                                    <a href="#" class="fw-bold">#{{ $loop->index + 1 }}</a>
                                                </td>
                                                <td>
                                                    <img style="height:4rem; width:4rem; object-fit: contain;"
                                                         src="{{ asset('/assets/imgs/car-parts/tier.jpg') }}"
                                                         alt="{{ $cartItem->name }}" class="img-fluid">
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
                                    <div class="col-lg-6 m-0 p-0">
                                        <div class="row">
                                            <h6 class="col-sm-9 col-8">Subtotal:</h6>
                                            <p class="col-sm-3 col-4 text-end">¥ {{ $totalPrice }}</p>
                                        </div>
                                        <hr class="my-2 bg-black" style="height: 2px;">
                                        <div class="row">
                                            <h6 class="col-sm-9 col-8">Total:</h6>
                                            <h4 class="col-sm-3 col-4 text-end text-black text-nowrap">
                                                ¥{{ $totalPrice }}</h4>
                                        </div>
                                        <div class="row p-2">
                                            <button
                                                class="btn btn-md rounded font-sm text-center d-flex align-items-center justify-content-center fw-bold">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="ms-2">CHECKOUT</span>
                                            </button>
                                            <button
                                                class="btn btn-instagram rounded font-sm text-center d-flex align-items-center justify-content-center fw-bold mt-2">
                                                <i class="fas fa-sync-alt"></i>
                                                <span class="ms-2">RESET ALL</span>
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

    @component('admin.components.parts-modal', ['id' => 'partsModal', 'title' => 'Parts List', 'size' => 'modal-lg', 'actionLabel' => 'Save Changes'])
        <div class="modal-body">
            <table class="table" id="partsTable">
                <thead>
                <tr>
                    <th>Make ID</th>
                    <th>Model ID</th>
                    <th>Part Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="partsTableBody">

                </tbody>
            </table>
        </div>
    @endcomponent

@endsection

@push('scripts')

    <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.4/dist/flasher.min.js"></script>

    <!-- Constants -->
    <script>
        const cartStoreUrl = '{{ route('admin.cart.store') }}';
        const csrfToken = '{{ csrf_token() }}';
    </script>

    <!-- Custom Scripts -->
    <script defer src="{{ asset('assets/js/part-modal-cart.js') }}"></script>

    <!-- Modal Show Event and Data Fetching -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            $('#partsModal').on('show.bs.modal', handleModalShow);
            setupDataTable();
        });

        function handleModalShow(event) {
            const button = $(event.relatedTarget);
            const makeId = button.data('make_id');
            const modelId = button.data('model_id');
            const partName = button.data('part_name');

            $('#partsTableBody').empty();
            fetchPartsData(makeId, modelId, partName);
        }

        function fetchPartsData(makeId, modelId, partName) {
            $.ajax({
                url: "{{ route('admin.part.group') }}",
                method: 'GET',
                data: {make_id: makeId, model_id: modelId, part_name: partName},
                success: populatePartsTable,
                error: function (xhr) {
                    console.error("Error fetching parts data:", xhr.responseJSON?.message || "Unknown error");
                }
            });
        }

        function populatePartsTable(response) {
            response.data.forEach(item => {
                $('#partsTableBody').append(`
                    <tr>
                        <td>${item.make_title}</td>
                        <td>${item.model_title}</td>
                        <td>${item.part_name}</td>
                        <td>${item.quantity}</td>
                        <td>${item.price}</td>
                        <td>
                            <a href="#" class="text-success add-to-cart"
                               data-id="${item.part_id}"
                               data-name="${item.part_name}"
                               data-quantity="${item.quantity}"
                               data-price="${item.price}">Add to cart</a>
                        </td>
                    </tr>
                `);
            });
        }
    </script>

    <!-- DataTable Initialization and Filters -->
    <script>
        function setupDataTable() {
            const table = $('#part-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.cart.create') }}',
                    data: fetchDataFilters
                },
                columns: [
                    {data: 'serial_number', searchable: false},
                    {data: 'part_name'},
                    {data: 'make'},
                    {data: 'model'},
                    {data: 'total_quantity', searchable: false},
                    {data: 'unit_avg_price', searchable: false},
                    {data: 'action', searchable: false}
                ]
            });

            $('#make, #model, #part').on('change', () => table.ajax.reload());
            $('#make').on('change', updateModelOptions);
        }

        function fetchDataFilters(d) {
            d.make = $('#make').val();
            d.model = $('#model').val();
            d.part = $('#part').val();
        }

        function updateModelOptions() {
            const selectedMakes = $('#make').val();
            fetchModels(selectedMakes);
        }

        function fetchModels(makes) {
            $.ajax({
                url: '{{ route('admin.vehicle.models') }}',
                method: 'GET',
                data: {makes: makes},
                success: populateModelOptions,
                error: function (xhr) {
                    console.error('Error fetching models:', xhr);
                }
            });
        }

        function populateModelOptions(data) {
            const modelDropdown = $('#model');
            modelDropdown.empty();
            modelDropdown.append(new Option('Select Model', '', false, false));
            data.models.forEach(model => {
                modelDropdown.append(new Option(model.model_title, model.model_id));
            });
        }
    </script>

@endpush
