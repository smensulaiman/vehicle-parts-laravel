{{--@php--}}
{{--dd($shippingData);--}}
{{--@endphp--}}

@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Import</h2>
        </div>
        <div class="row">
            <div class="card px-0">
                <div class="card-header bg-primary-light">
                    <div class="col-xl-6 col-lg-9 col-md-12 ms-auto">
                        <form action="{{ route('admin.parts.create') }}" method="GET">
                            @csrf
                            <div class="d-flex justify-content-end gap-2">
                                <input
                                    type="text"
                                    name="booking-id"
                                    class="form-control border w-25"
                                    value="{{ request('booking-id', old('booking-id')) }}"
                                    placeholder="Enter Booking ID"
                                />
                                <button type="submit" class="btn btn-md rounded font-sm hover-up">
                                    Search
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="card-body">
                    @if(!empty($shippingData))
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Paid</th>
                                            <th>Method</th>
                                            <th>Date</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><b>#456667</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/1.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Amex</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/2.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Master card</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#887780</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#344556</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/2.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Master card</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/2.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Master card</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#998784</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#556667</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#098989</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png"
                                                         alt="Payment"/>
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2020, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table-responsive.// -->
                            </div>
                            <!-- col end// -->
                            <aside class="col-lg-3">
                                <div class="box bg-light px-4">
                                    <h6 class="mt-15">Shipping Details</h6>
                                    <hr/>
                                    @if($shippingData->shipment)
                                        @foreach($shippingData->shipment as $key => $val)
                                            @php
                                                $formattedKey = ucwords(str_replace('_', ' ', $key));
                                            @endphp
                                            <div class="d-flex">
                                                <h6 class="mb-0">{{ $formattedKey }} : </h6>
                                                <p class="ms-2 text-sm">{{$val}}</p>
                                            </div>
                                            <br/>
                                        @endforeach
                                    @endif
                                </div>
                            </aside>
                            <!-- col end// -->
                        </div>
                    @else
                        <p>No Data</p>
                    @endif

                </div>
            </div>
        </div>
        <!-- row end// -->
    </section>

@endsection
