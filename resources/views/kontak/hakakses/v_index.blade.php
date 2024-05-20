@extends('layout/vertikal/templates')
@section('indukmodule', 'Kontak')
@section('subtitle', 'Index')
@section('title', 'Hak Akses')
@section('isi')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>@yield('title')</h3>
                <p class="text-subtitle text-muted">Selamat datang di halaman @yield('title').</p>
                <a href="" class="btn btn-primary">Buat Baru</a>
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
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th width="10px">No.</th>
                                <th>Nama</th>
                                <th width="300px">Status Hak Akses</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($ambildata as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$row->hakakses_nama}}</td>
                                <td>{{$row->hakakses_status == 1 ? "Aktif" : "Tidak Aktif/Bermasalah"}}</td>
                                <td>
                                    <a href="{{url('/kontak/hak-akses/edit/'.$row->id)}}" class="btn btn-outline-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{asset('assets/mazer/assets/extensions/choices.js/public/assets/scripts/choices.js')}}"></script>
<script src="{{asset('assets/mazer/assets/static/js/pages/form-element-select.js')}}"></script>
<script src="{{asset('assets/mazer/assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/mazer/assets/extensions/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/mazer/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/mazer/assets/static/js/pages/datatables.js')}}"></script>
@endsection