@extends('admin.layouts.master')

@section('content')

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Cart</h2>
        </div>
        @livewire('cart-items')
    </section>

@endsection