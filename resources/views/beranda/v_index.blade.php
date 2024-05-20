@extends('layout/vertikal/templates')
@section('indukmodule', 'Dashboard')
@section('subtitle', 'Manajemen')
@section('title', 'Beranda')
@section('isi')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>@yield('title')</h3>
                <p class="text-subtitle text-muted">Selamat datang di halaman @yield('title')</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><?= env('APP_NAME') ?></a></li>
                        <li class="breadcrumb-item">@yield('indukmodule')</li>
                        <li class="breadcrumb-item">@yield('title')</li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('subtitle')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <p>Selamat datang di Sistem <?= env('APP_NAME'); ?></p>
                <p>Anda Memiliki Akses sebagai <b>

                    @if (session('role') == 1)
                        Admin
                    @elseif(session('role') == 2)
                        Sales
                    @elseif (session('role') == 3)
                        Customer
                    @else
                        Tidak Terdefinisi
                    @endif
                </b>
                </p>
            </div>
        </div>
    </section>
</div>
<div class="page-body mt-4">

    <!-- Customer Lifetime Value Visualization -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold mb-4">Customer Lifetime Value</h2>
        <div class="flex justify-between items-center">
            <div class="text-center">
                <div class="bg-green-500 text-white py-2 px-4 rounded-lg">John Doe</div>
                <div class="mt-2">Total Spend: Rp.12,000</div>
                <div class="mt-2">Avg. Monthly Spend: Rp.200</div>
                <div class="mt-2 text-green-600">Estimated CLV: Rp.18,000</div>
            </div>
        </div>
    </div>

    <!-- Customer Segmentation Visualization -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold mb-4">Customer Segmentation</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                <h3 class="text-xl font-semibold mb-2">High Value</h3>
                <p>Total Purchases: 45</p>
                <p>Total Spend: Rp.12,000</p>
                <p>Avg. Spend per Purchase: Rp.267</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                <h3 class="text-xl font-semibold mb-2">Medium Value</h3>
                <p>Total Purchases: 30</p>
                <p>Total Spend: Rp.5,000</p>
                <p>Avg. Spend per Purchase: Rp.167</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                <h3 class="text-xl font-semibold mb-2">Low Value</h3>
                <p>Total Purchases: 15</p>
                <p>Total Spend: Rp.1,500</p>
                <p>Avg. Spend per Purchase: Rp.100</p>
            </div>
        </div>
    </div>
</div>
@endsection
