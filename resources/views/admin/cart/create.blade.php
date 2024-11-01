@extends('admin.layouts.master')

@section('content')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Cart</h2>
        </div>
        <div class="row">
            <div class="col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Table Part 1 -->
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <header>
                                    <h4 class="d-flex align-items-center justify-content-center">
                                        <span>
                                            <i class="fas fa-filters"></i>
                                        </span>
                                        <span class="ms-2">Filters</span>
                                    </h4>
                                </header>
                                <div class="pt-3 row">
                                    <div class="col-lg-12">
                                        <label for="make" class="pb-1 ps-1 fw-bold text-primary">
                                            <span>Make</span>
                                        </label>
                                        <select class="form-select p-2" multiple aria-label="multiple select example"
                                            name="make" id="make" style="height: 7rem;overflow-y: scroll;">
                                            <option class="p-2" value="">Select Menu</option>
                                            <option class="p-2" value="1">One</option>
                                            <option class="p-2" value="2">Two</option>
                                            <option class="p-2" value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 pt-2">
                                        <label for="make" class="pb-1 ps-1 fw-bold text-primary">
                                            <span>Model</span>
                                        </label>
                                        <select class="form-select p-2" multiple aria-label="multiple select example"
                                            name="make" id="make" style="height: 7rem;overflow-y: scroll;">
                                            <option class="p-2" value="">Select Menu</option>
                                            <option class="p-2" value="1">One</option>
                                            <option class="p-2" value="2">Two</option>
                                            <option class="p-2" value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 pt-2">
                                        <label for="make" class="pb-1 ps-1 fw-bold text-primary">
                                            <span>Model Grade</span>
                                        </label>
                                        <select class="form-select p-2" multiple aria-label="multiple select example"
                                            name="make" id="make" style="height: 7rem;overflow-y: scroll;">
                                            <option class="p-2" value="">Select Menu</option>
                                            <option class="p-2" value="1">One</option>
                                            <option class="p-2" value="2">Two</option>
                                            <option class="p-2" value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Table Part 1 -->
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <header>
                                    <h4 class="d-flex align-items-center justify-content-center">
                                        <span>
                                            <i class="fas fa-list"></i>
                                        </span>
                                        <span class="ms-2">Items List</span>
                                    </h4>
                                </header>

                                <div class="table-responsive pt-3">
                                    <table class="table table-hover">
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
                                                <td scope="row"><a href="#" class="fw-bold">#1</a></td>
                                                <td>Mark</td>
                                                <td>¥299.99</td>
                                                <td>700</td>
                                                <td>
                                                    <a href="#" class="btn btn-md rounded font-sm"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row"><a href="#" class="fw-bold">#2</a></td>
                                                <td>Jacob</td>
                                                <td>¥299.99</td>
                                                <td>400</td>
                                                <td>
                                                    <a href="#" class="btn btn-md rounded font-sm"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row"><a href="#" class="fw-bold">#3</a></td>
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

            <div class="col-xxl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Checkout Part 2 -->
                            <div class="col-xxl-12 col-xl-12 col-sm-12">
                                <header>
                                    <h4 class="d-flex align-items-center justify-content-center">
                                        <span>
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                        <span class="ms-2">Your cart (2 items)</span>
                                    </h4>
                                </header>
                                <!-- Cart Content -->
                                <div class="table-responsive pt-3">

                                    <table class="table">
                                        <thead class="table-light">
                                            <tr class="border-bottom text-center">
                                                <th scope="col">#SN</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr class="border-bottom">
                                                <td scope="row"><a href="#" class="fw-bold">#1</a></td>
                                                <td class="d-flex justify-content-center align-items-center gap-3 p-3">
                                                    <div>
                                                        <img style="height:4rem; width:4rem; object-fit: contain;"
                                                            src="../../assets/imgs/car-parts/tier.jpg" alt="Product 1"
                                                            class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <p>Steering</p>
                                                        <p>¥299.99</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group d-flex justify-content-center">
                                                        <a href="#" class="btn btn-light btn-sm fw-bold">-</a>
                                                        <input type="number" class="form-control text-center"
                                                            value="1" style="width:4rem;">
                                                        <a href="#" class="btn btn-light btn-sm fw-bold">+</a>
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
                                                <td scope="row"><a href="#" class="fw-bold">#2</a></td>
                                                <td
                                                    class="d-flex justify-content-center align-items-center gap-3 p-3 text-center">
                                                    <div>
                                                        <img style="height:4rem; width:4rem; object-fit: contain;"
                                                            src="../../assets/imgs/car-parts/steering.jpg" alt="Product 2"
                                                            class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <p>Tier</p>
                                                        <p>¥100.00</p>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="input-group">
                                                        <a href="#" class="btn btn-light btn-sm fw-bold">-</a>
                                                        <input type="number" class="form-control text-center"
                                                            value="1" style="width:4rem;">
                                                        <a href="#" class="btn btn-light btn-sm fw-bold">+</a>
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
                                <div class="row px-3 d-flex justify-content-end">
                                    <div class="col-lg-8">
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
