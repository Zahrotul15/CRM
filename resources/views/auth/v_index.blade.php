@extends('layout/horizontal/templates')
@section('subtitle', 'Login')
@section('title', 'Authentication')
@section('isi')
<div class="py-3 py-lg-4">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Selamat Datang</h3>
                <p class="text-subtitle text-muted">Auth <?= env('APPNAME'); ?></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><?= env('APP_NAME') ?></a></li>
                        <li class="breadcrumb-item">@yield('title')</li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('subtitle')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-secondary">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4>Lakukan Autentikasi Segera👋</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div style="text-align: justify;">
                                                <h5>Ketentuan!</h5>
                                                <p>
                                                1. Untuk masuk kedalam aplikasi ,
                                                Harap menggunakan akun Google yang terdaftar di Sistem Kepegawaian.<br>
                                                2. Bagi akun yang tidak aktif, silahkan hubungi administrator (<i>coming soon</i>).
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="text-center">
                                                <h5>&nbsp;</h5>
                                                <br>
                                                <div>
                                                    <a href="{{url('auth/redirect')}}" class="btn btn-outline-primary"><i class='bx bxl-google'></i>&nbsp;&nbsp;&nbsp;Masuk Menggunakan Google</a>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection