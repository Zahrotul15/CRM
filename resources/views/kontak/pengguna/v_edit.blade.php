@extends('layout/vertikal/templates')
@section('indukmodule', 'Kontak')
@section('subtitle', 'Edit')
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
                <form action="{{url('kontak/pengguna/update/'.$ambilpengguna_id->id)}}" enctype="multipart/form-data" method="POST"> @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Google ID</label>
                                <input type="text" name="google_id" readonly class="form-control" value="{{ $ambilpengguna_id->google_id }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Google Token</label>
                                <input type="text" name="google_token" readonly class="form-control" value="{{ $ambilpengguna_id->google_token }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" readonly class="form-control" value="{{ $ambilpengguna_id->email }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $ambilpengguna_id->name }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Perusahaan</label>
                                <input type="text" name="perusahaan" class="form-control" value="{{ $ambilpengguna_id->perusahaan }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $ambilpengguna_id->phone }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Role/Hak Akses</label>
                                <select class="form-select" name="role">
                                    @foreach ($hakakses as $item)
                                        <option value="{{$item->id}}" {{$item->id == $ambilpengguna_id->role ? "selected":""}}>{{$item->hakakses_nama}}</option>
                                    @endforeach
                                </select>                                                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Edit Akun</label>
                                <select class="form-select" name="editakundefault">
                                    <option value="1" {{$ambilpengguna_id->editakundefault == 1 ? "selected":""}}>Sudah</option>
                                    <option value="0" {{$ambilpengguna_id->editakundefault == 0 ? "selected":""}}>Belum</option>
                                </select>                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Status Akun</label>
                                <select class="form-select" name="statusakun">
                                    <option value="1" {{$ambilpengguna_id->statusakun == 1 ? "selected":""}}>Aktif</option>
                                    <option value="0" {{$ambilpengguna_id->statusakun == 0 ? "selected":""}}>Tidak Aktif</option>
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