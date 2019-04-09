@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Detail Barang Masuk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Detail Barang Masuk</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('detailBarangUpdate', $detailBarangs->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulir</h4>
                    </div>
                    <div class="card-body">
                        <p>Lampiran yang wajib diisi : </p>
                        <ul>
                            <li>No Nota Barang Masuk</li>
                            <li>Nama Barang</li>
                            <li>Jumlah</li>
                            <li>Sub Total</li>
                            <li>Konfirmasi pemeriksaan data</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Detail Barang Masuk</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>No Nota Barang Masuk</label>
                                    <select name="id_barang_masuk" id="id_barang_masuk" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($barangMasuks as $res)
                                        @if($detailBarangs->id_barang_masuk == $res->id)
                                        <option value="{{ $res->id }}" selected>{{ $res->no_nota }}</option>
                                        @else
                                        <option value="{{ $res->id }}">{{ $res->no_nota }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form No Nota Barang Masuk harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <select name="id_barang" id="id_barang" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($barangs as $res)
                                        @if($detailBarangs->id_barang == $res->id)
                                        <option value="{{ $res->id }}" selected>{{ $res->nama_barang }}</option>
                                        @else
                                        <option value="{{ $res->id }}">{{ $res->nama_barang }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Form Nama Barang harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="jumlah" required="" value="{{ $detailBarangs->jumlah }}">
                                    <div class="invalid-feedback">
                                        Form Jumlah harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Sub Total</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="sub_total" required="" value="{{ $detailBarangs->sub_total }}">
                                    <div class="invalid-feedback">
                                        Form Sub Total harus diisi!
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
                        <button class="btn btn-primary">Perbarui</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $('#barangMenuLink').addClass('active');
    $('#detailBarangLink').addClass('active');
</script>
@endsection