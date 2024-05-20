@extends('layout/vertikal/templates')
@section('indukmodule', 'Kontak')
@section('subtitle', 'Tambah')
@section('title', 'Pengguna')
@section('isi')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>@yield('title')</h3>
                <p class="text-subtitle text-muted">Halaman @yield('subtitle') @yield('title')</p>
                <a href="{{url('kontak/pengguna')}}" class="btn btn-primary">Kembali</a>
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
                <form action="{{url('kontak/pengguna/prosestambah')}}" enctype="multipart/form-data" method="POST"> @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Perusahaan</label>
                                <input type="text" name="perusahaan" class="form-control" ">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Role/Hak Akses</label>
                                <select class="form-select" name="role">
                                    @foreach ($hakakses as $item)
                                        <option value="{{$item->id}}">{{$item->hakakses_nama}}</option>
                                    @endforeach
                                </select>                                                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Edit Akun</label>
                                <select class="form-select" name="editakundefault">
                                    <option value="0">Belum</option>
                                    <option value="1">Sudah</option>
                                </select>                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Status Akun</label>
                                <select class="form-select" name="statusakun">
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                                </select>          
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                        </div>
                    </div>
                </form>
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