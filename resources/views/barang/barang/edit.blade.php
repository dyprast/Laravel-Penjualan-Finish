@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Jenis Barang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Jenis Barang</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('barangUpdate', $barangs->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulir</h4>
                    </div>
                    <div class="card-body">
                        <p>Lampiran yang wajib diisi : </p>
                        <ul>
                            <li>Jenis Barang</li>
                            <li>Nama Barang</li>
                            <li>Harga Net</li>
                            <li>Harga Jual</li>
                            <li>Stok</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Jenis Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <select name="id_jenis_barang" id="id_jenis_barang" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($jenis_barangs as $res)
                                        @if($barangs->id_jenis_barang == $res->id)
                                        <option value="{{ $res->id }}" selected>{{ $res->jenis_barang }}</option>
                                        @else
                                        <option value="{{ $res->id }}">{{ $res->jenis_barang }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Jenis Barang harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" required="" value="{{ $barangs->nama_barang }}">
                                    <div class="invalid-feedback">
                                        Form Nama Barang harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Harga Net</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="harga_net" required="" value="{{ $barangs->harga_net }}">
                                    <div class="invalid-feedback">
                                        Form Harga Net harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Harga Jual</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="harga_jual" required="" value="{{ $barangs->harga_jual }}">
                                    <div class="invalid-feedback">
                                        Form Harga Jual harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="stok" required="" value="{{ $barangs->stok }}">
                                    <div class="invalid-feedback">
                                        Form Stok harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1">Setuju, dan sudah memeriksa data dengan benar.</label>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $('#barangMenuLink').addClass('active');
    $('#barangLink').addClass('active');
</script>
@endsection