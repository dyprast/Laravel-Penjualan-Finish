@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Data Penjualan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data</a></div>
        <div class="breadcrumb-item"><a href="#">Penjualan</a></div>
        <div class="breadcrumb-item">Index</div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('barangMenu/penjualan/tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-database"></i> Tambah Data</a>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Faktur</th>
                        <th>Petugas</th>
                        <th>Tanggal Penjualan</th>
                        <th>Bayar</th>
                        <th>Sisa</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @include('_____API.tanggal-indo')
                    @foreach($penjualans as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><span class="badge badge-info"><b>{{ $res->no_faktur }}</b></span></td>
                        <td>{{ $res->petugas->nama }}</td>
                        <td>{{ tgl_indo($res->tanggal_penjualan) }}</td>
                        <td>Rp{{ number_format($res->bayar,0,",",".") }}</td>
                        <td>Rp{{ number_format($res->sisa,0,",",".") }}</td>
                        <td>{{ $res->total }}</td>
                        <td>
                            <a href="{{ route('penjualanEdit', $res->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" data-uri="{{ route('penjualanDelete', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

        @if(session('alertHapus'))
            <script>
                iziToast.success({
                    title: 'Berhasil menghapus Data!',
                    message: "{{ session('alertHapus') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @elseif(session('alertEdit'))
            <script>
                iziToast.success({
                    title: 'Berhasil mengedit Data!',
                    message: "{{ session('alertEdit') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @elseif(session('alertTambah'))
            <script>
                iziToast.success({
                    title: 'Berhasil menambah Data!',
                    message: "{{ session('alertTambah') }}",
                    position: 'bottomRight'
                });
            </script>
        
        @endif
@endsection