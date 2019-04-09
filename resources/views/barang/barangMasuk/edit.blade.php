@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Barang Masuk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Barang Masuk</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('barangMasukUpdate', $barang_masuks->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulir</h4>
                    </div>
                    <div class="card-body">
                        <p>Lampiran yang wajib diisi : </p>
                        <ul>
                            <li>Tanggal Masuk</li>
                            <li>Total</li>
                            <li>Distributor</li>
                            <li>Petugas</li>
                            <li>Konfirmasi pemeriksaan data</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Barang Masuk</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input type="text" class="form-control datepicker" name="tanggal_masuk" required="" value="{{ $barang_masuks->tanggal_masuk }}">
                                    <div class="invalid-feedback">
                                        Form Tanggal Masuk harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="total" required="" value="{{ $barang_masuks->total }}">
                                    <div class="invalid-feedback">
                                        Form Total harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Distributor</label>
                                    <select name="id_distributor" id="id_distributor" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($distributors as $res)
                                        @if($barang_masuks->id_distributor == $res->id)
                                        <option value="{{ $res->id }}" selected>{{ $res->nama }} - {{ $res->kota_asal }}</option>
                                        @else
                                        <option value="{{ $res->id }}">{{ $res->nama }} - {{ $res->kota_asal }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Distributor harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Petugas</label>
                                    <select name="id_petugas" id="id_petugas" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($petugas as $res)
                                        @if($barang_masuks->id_petugas == $res->id)
                                        <option value="{{ $res->id }}" selected>{{ $res->nama }}</option>
                                        @else
                                        <option value="{{ $res->id }}">{{ $res->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Petugas harus diisi!
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
    $('#barangMasukLink').addClass('active');
</script>
@endsection