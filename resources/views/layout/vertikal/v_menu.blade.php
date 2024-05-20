@php
    $currentSegment = Request::segment(1);
    $currentPath = Request::path();
    // dd($currentSegment, $currentPath); // Ini akan menghentikan eksekusi dan menampilkan nilai
@endphp
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-item">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img 
                            src="<?= session('avatar')?>"  
                            class='rounded-circle' width="40px"
                        >
                    </span>
                </div>
                <span class="form-control text-center" style="font-size:13px; display: flex; align-items: center;">
                    <div style="margin: auto;">
                        <?= session('name');?>
                    </div>
                </span>
            </div>
        </li>
        <li class="sidebar-item">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Logout</span>
                </div>
                <a href='{{url('/logout')}}' id="logoutButton" class="btn btn-danger">Klik untuk logout &nbsp;&nbsp;</a>
            </div>
        </li>
        <hr>
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item {{ request()->segment(1) === 'beranda' ? 'active' : '' }}">
            <a href="{{url('/beranda')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Beranda</span>
            </a>
        </li>
        @if (session('role') == '1')
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link {{ $currentSegment === 'kontak' ? 'active' : '' }}'><i class="bi bi-person-badge"></i><span>Kontak</span></a>
            <ul class="submenu">
                <li class="submenu-item <?php if (strpos(request()->path(), 'kontak/hak-akses') !== false) echo 'active'; ?>">
                    <a href="{{url('/kontak/hak-akses')}}" class="submenu-link">Hak Akses</a>
                </li>
                <li class="submenu-item <?php if (strpos(request()->path(), 'kontak/pengguna') !== false) echo 'active'; ?>">
                    <a href="{{url('/kontak/pengguna')}}" class="submenu-link">Pengguna</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'><i class="bi bi-clock-fill"></i><span>Tracking</span></a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="" class="submenu-link">Validasi Tagihan</a>
                </li>
                <li class="submenu-item">
                    <a href="" class="submenu-link">Validasi Pembayaran</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'><i class="bi bi-collection-fill"></i><span>Penjualan</span></a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="" class="submenu-link">Riwayat Tagihan</a>
                </li>
                <li class="submenu-item">
                    <a href="" class="submenu-link">Riwayat Transaksi</a>
                </li>
            </ul>
        </li>
        @endif
        @if (session('role') == '2')
        <li class="sidebar-item {{ request()->segment(1) === 'katalog' ? 'active' : '' }}">
            <a href="{{url('/katalog')}}" class='sidebar-link'>
                <i class="bi bi-journal-album"></i>
                <span>Katalog</span>
            </a>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'><i class="bi bi-clock-fill"></i><span>Invoice</span></a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="{{url('invoice/buat-tagihan')}}" class="submenu-link">Buat Tagihan</a>
                </li>
                <li class="submenu-item">
                    <a href="{{url('invoice/cek-tagihan')}}" class="submenu-link">Cek Tagihan</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'><i class="bi bi-collection-fill"></i><span>Laporan</span></a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="{{url('laporan/rekap')}}" class="submenu-link">Rekap</a>
                </li>
            </ul>
        </li>
        @endif
        @if (session('role') == '3')
        <li class="sidebar-item {{ request()->segment(1) === 'katalog' ? 'active' : '' }}">
            <a href="{{url('/katalog')}}" class='sidebar-link'>
                <i class="bi bi-journal-album"></i>
                <span>Katalog</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->segment(1) === 'log' ? 'active' : '' }}">
            <a href="{{url('/log')}}" class='sidebar-link'>
                <i class="bi bi-door-open-fill"></i>
                <span>Log Pembelian</span>
            </a>
        </li>
        @endif
    </ul>
</div>

<script>
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault();

        // Menampilkan alert window
        var confirmation = confirm('Anda yakin ingin logout?');

        // Jika pengguna mengklik "OK", lakukan logout
        if (confirmation) {
            window.location.href = this.getAttribute('href');
        }
    });
</script>