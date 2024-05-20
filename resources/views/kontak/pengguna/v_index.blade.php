@extends('layout/vertikal/templates')
@section('indukmodule', 'Kontak')
@section('subtitle', 'Index')
@section('title', 'Pengguna')
@section('isi')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>@yield('title')</h3>
                <p class="text-subtitle text-muted">Selamat datang di halaman @yield('title')</p>
                <a href="{{url('kontak/pengguna/tambah')}}" class="btn btn-primary">Buat Baru</a>
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
                                <th>Hak Akses</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Google ID</th>
                                <th>Status Edit Default</th>
                                <th>Status Akun</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($ambilpengguna as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@if ($row->role == 1)
                                    Admin
                                @elseif ($row->role == 2)
                                    Sales
                                @elseif ($row->role == 3)
                                    Customer
                                @else
                                    Tidak Terdefinisi
                                @endif</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->google_id}}</td>
                                <td>{{$row->editakundefault == 0 ? "Belum Edit" : "Sudah Edit"}}</td>
                                <td>{{$row->statusakun == 1 ? "Aktif" : "Tidak Aktif/Bermasalah"}}</td>
                                <td>
                                    <a href="{{url('/kontak/pengguna/edit/'.$row->id)}}" class="btn btn-outline-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{url('/kontak/pengguna/hapus/'.$row->id)}}" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="bi bi-trash-fill"></i></a>
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