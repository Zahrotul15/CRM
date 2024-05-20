@extends('layout/horizontal/templates')
@section('subtitle', 'Index')
@section('title', 'Portal')
@section('isi')
<div class="py-3 py-lg-4">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Selamat Datang</h3>
                <p class="text-subtitle text-muted">@yield('title') <?= env('APP_NAME'); ?></p>
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
                                    {{-- <p>Email : {{session('email')}}. ID : {{session('id')}}. Nama : {{session('name')}}. Role : {{session('role')}}</p> --}}
                                    Selamat Datang di @yield('title') <?= env('APP_NAME'); ?>.
                                    Silahkan Login untuk Mengakses Dashboard. <br><br>
                                    <a href="{{url('/login')}}" class="btn btn-flex btn-primary">Login</a>
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