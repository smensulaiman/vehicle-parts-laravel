@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Parts Categories</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 col-xl-5">
                <div class="card mb-4">
                    <header class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="card-title">Total Vehicles</h6>
                            <a href="{{ route('admin.part-category.create') }}" class="btn btn-primary btn-sm rounded">Create New</a>
                        </div>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-bordered table-nowrap mb-0" style="table-layout: auto">
                                    <thead class="table-light border-1">
                                    <tr>
                                        <th class="text-center" scope="col" width="60">S/N</th>
                                        <th scope="col">Part Name</th>
                                        <th class="text-center" scope="col">Quantity</th>
                                        <th class="text-end" scope="col">Price</th>
                                        <th scope="col">Generic</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(!empty($partNames))
                                        @foreach($partNames as $partName)
                                            <tr>
                                                <td class="border-1 text-center">
                                                    <a href="#" class="fw-bold">#{{$partName->id}}</a>
                                                </td>
                                                <td class="border-1">{{$partName->name}}</td>
                                                <td class="text-center border-1">{{$partName->quantity}}</td>
                                                <td class="text-end border-1">{{ number_format($partName->price) }}</td>
                                                <td class="border-1 text-center">{{$partName->is_generic ? 'yes' : 'no'}}</td>
                                                <td class="border-1 px-0">
                                                    <div class="d-flex justify-content-evenly text-end">
                                                        <a href="{{ route('admin.part-category.edit', $partName->id) }}" class="btn btn-sm font-sm rounded btn-brand">
                                                            <i class="material-icons md-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a href="{{ route('admin.part-category.destroy', $partName->id) }}" class="btn btn-sm delete-part-category font-sm btn-light rounded">
                                                            <i class="material-icons md-delete_forever"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
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
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@push('scripts')

    <script>
        function performDeleteRequest(url) {
            $.ajax({
                type: 'DELETE',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: handleDeleteSuccess,
                error: handleDeleteError
            });
        }

        function confirmDelete(url) {
            Swal.fire({
                title: "Are you sure you want to delete this part?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    performDeleteRequest(url);
                }
            });
        }

        $(document).ready(function () {
            $('body').on('click', '.delete-part-category', function (event) {
                event.preventDefault();
                confirmDelete($(this).attr('href'));
            });
        });
    </script>

@endpush
