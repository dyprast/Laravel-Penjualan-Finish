@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Data Distributor</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data</a></div>
        <div class="breadcrumb-item"><a href="#">Distributor</a></div>
        <div class="breadcrumb-item">Index</div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('data/distributor/tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-database"></i> Tambah Data</a>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Kota Asal</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($distributors as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->nama }}</td>
                        <td>{{ $res->kota_asal }}</td>
                        <td>{{ $res->alamat }}</td>
                        <td>{{ $res->email }}</td>
                        <td>{{ $res->telp }}</td>
                        <td>
                            <a href="{{ route('distributorEdit', $res->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" data-uri="{{ route('distributorDelete', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal">Delete</a>
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