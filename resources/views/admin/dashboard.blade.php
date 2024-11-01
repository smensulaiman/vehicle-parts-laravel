@php use App\Models\Shipment;use App\Models\Vehicle; @endphp
@extends('admin.layouts.master')

@section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
            </div>
            <div>
                <a href="#" class="btn btn-primary">
                    <i class="text-muted my-auto material-icons md-barcode"></i>
                    <span>GENERATE BARCODE</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body bg-11 mb-4 animate__animated animate__fadeInUp animate__faster">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light">
                            <i class="text-primary material-icons md-monetization_on"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Revenue</h6>
                            <span>¥--,---</span>
                            <span class="text-sm"> Shipping fees are not included </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body bg-12 mb-4 animate__animated animate__fadeInUp animate__fast">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-success-light">
                            <i class="text-danger material-icons md-directions_boat"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Shipping</h6>
                            <span>{{ Shipment::count() }}</span>
                            <span class="text-sm"> Including shipping in transit </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body bg-13 mb-4 animate__animated animate__fadeInUp animate__slow">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Vehicles</h6>
                            <span>{{ Vehicle::count() }}</span>
                            <span class="text-sm"> In {{ Shipment::count() }} Shipments </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="card card-body bg-8 mb-4 animate__animated animate__fadeInUp animate__slow">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-shopping_basket"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Monthly Earning</h6>
                            <span>¥--,---</span>
                            <span class="text-sm"> Based in your local time. </span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <article class="card-body">
                                <h5 class="card-title">New Customers</h5>
                                <div class="new-member-list">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/imgs/people/avatar-4.png')}}" alt="" class="avatar" />
                                            <div>
                                                <h6>Mohammad Iftikhar</h6>
                                                <p class="text-muted font-xs">Autocraft Japan Ltd</p>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-xs">View</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/imgs/people/avatar-2.png')}}" alt="" class="avatar" />
                                            <div>
                                                <h6>Mohammad Nouman</h6>
                                                <p class="text-muted font-xs">RZ Tech</p>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-xs">View</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/imgs/people/avatar-3.png')}}" alt="" class="avatar" />
                                            <div>
                                                <h6>Md Sulaiman</h6>
                                                <p class="text-muted font-xs">Senda Japan</p>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-xs">View</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <article class="card-body">
                                <h5 class="card-title">Recent Sales</h5>
                                <ul class="verti-timeline list-unstyled font-sm">
                                    <li class="event-list active">
                                        <div class="event-timeline-dot">
                                            <i class="material-icons md-play_circle_outline font-xxl animation-fade-right"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h6 class="m-0 p-0"><span>Today</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                            </div>
                                            <div class="media-body">
                                                <div>¥2,560,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h6><span>29 Oct</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                            </div>
                                            <div class="media-body">
                                                <div>¥3,220,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h6><span>28 Oct</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                            </div>
                                            <div class="media-body">
                                                <div>¥1,580,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h6><span>27 Oct</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                            </div>
                                            <div class="media-body">
                                                <div>¥560,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h6><span>26 Oct</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                            </div>
                                            <div class="media-body">
                                                <div>¥60,000</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Sale By Make</h5>
                        <span class="text-muted font-xs">Toyota Parts</span>
                        <div class="progress mb-3">
                            <div class="progress-bar animate__animated animate__fadeInLeft animate__faster" role="progressbar" style="width: 40%">40%</div>
                        </div>
                        <span class="text-muted font-xs">BMW Parts</span>
                        <div class="progress mb-3">
                            <div class="progress-bar animate__animated animate__fadeInLeft animate__fast" role="progressbar" style="width: 35%">35%</div>
                        </div>
                        <span class="text-muted font-xs">Suzuki Parts</span>
                        <div class="progress mb-3">
                            <div class="progress-bar animate__animated animate__fadeInLeft animate__slow" role="progressbar" style="width: 15%">15%</div>
                        </div>
                        <span class="text-muted font-xs">Nissan Parts</span>
                        <div class="progress mb-3">
                            <div class="progress-bar animate__animated animate__fadeInLeft animate__slower" role="progressbar" style="width: 10%">10%</div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <h6 class="card-title">Latest Shipments</h6>
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
                        {{$dataTable->table()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
