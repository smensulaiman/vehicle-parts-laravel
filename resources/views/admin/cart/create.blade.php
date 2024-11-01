@extends('admin.layouts.master')

@section('content')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Cart</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-5">
                            <!-- Table Part 1 -->
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <h4 class="d-flex align-items-center justify-content-center">
                                    <span>
                                        <i class="fas fa-list"></i>
                                    </span>
                                    <span class="ms-2">Items List</span>
                                </h4>

                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr class="text-center">
                                                <th scope="col">#SN</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <th scope="row"><a href="#" class="fw-bold">#1</a></th>
                                                <td>Mark</td>
                                                <td>¥299.99</td>
                                                <td>700</td>
                                                <td>
                                                    <a href="#" class="btn btn-md rounded font-sm"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#" class="fw-bold">#2</a></th>
                                                <td>Jacob</td>
                                                <td>¥299.99</td>
                                                <td>400</td>
                                                <td>
                                                    <a href="#" class="btn btn-md rounded font-sm"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#" class="fw-bold">#3</a></th>
                                                <td>Larry the Bird</td>
                                                <td>¥299.99</td>
                                                <td>300</td>
                                                <td>
                                                    <a href="#" class="btn btn-md rounded font-sm"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-5">
                            <!-- Checkout Part 2 -->
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <h4 class="d-flex align-items-center justify-content-center">
                                    <span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                    <span class="ms-2">Your Cart (2 items)</span>
                                </h4>
                                <!-- Cart Content -->
                                <div class="table-responsive pt-3">

                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr class="border-bottom text-center">
                                                <th scope="col">Item</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr class="border-bottom">
                                                <td class="d-flex justify-items-center align-items-center gap-3 p-3">
                                                    <div>
                                                        <img style="height:4rem; width:4rem; object-fit: contain;"
                                                            src="../../assets/imgs/car-parts/tier.jpg" alt="Product 1"
                                                            class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <p>Product Name</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>¥299.99</p>
                                                </td>
                                                <td>
                                                    <div class="input-group d-flex justify-content-center ">

                                                        <div class="btn btn-light btn-sm">-</div>
                                                        <input type="number" class="form-control text-center"
                                                            value="1" style="width:4rem;">
                                                        <div class="btn btn-light btn-sm">+</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p>¥299.99</p>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-instagram rounded font-sm"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td
                                                    class="d-flex justify-items-center align-items-center gap-3 p-3 text-center">
                                                    <div>
                                                        <img style="height:4rem; width:4rem; object-fit: contain;"
                                                            src="../../assets/imgs/car-parts/steering.jpg" alt="Product 2"
                                                            class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <p>Product Name</p>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p>¥100.00</p>
                                                </td>
                                                <td class="text-center">
                                                    <div class="input-group">

                                                        <div class="btn btn-light btn-sm">-</div>
                                                        <input type="number" class="form-control text-center"
                                                            value="1" style="width:4rem;">
                                                        <div class="btn btn-light btn-sm">+</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p>¥100.00</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-instagram rounded font-sm"> <i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>

                                </div>

                                <!-- Lower Part Of checkout -->
                                <div class="row px-2 d-flex justify-content-end">
                                    <div class="col-md-6">
                                        <div class="row  border-bottom py-2">
                                            <h6 class="col-sm-9 col-8">Subtotal:</h6>
                                            <p class="col-sm-3 col-4">¥ 399.00</p>
                                        </div>
                                        <div class="row border-bottom py-2">
                                            <h6 class="col-sm-9 col-8">Tax:</h6>
                                            <p class="col-sm-3 col-4">¥ 100.99</p>
                                        </div>
                                        <div class="row py-2">
                                            <h6 class="col-sm-9 col-8">Grand Total:</h6>
                                            <p class="col-sm-3 col-4">¥ 499.99</p>
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

    </section>
@endsection
