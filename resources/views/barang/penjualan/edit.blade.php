@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Penjualan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Penjualan</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('penjualanUpdate', $penjualans->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulir</h4>
                    </div>
                    <div class="card-body">
                        <p>Lampiran yang wajib diisi : </p>
                        <ul>
                            <li>Petugas</li>
                            <li>Tanggal Penjualan</li>
                            <li>Bayar</li>
                            <li>Sisa</li>
                            <li>Total</li>
                            <li>Konfirmasi pemeriksaan data</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Petugas</label>
                                    <select name="id_petugas" id="id_petugas" class="form-control select2" required="">
                                        <option value="">&mdash;</option>
                                        @foreach($petugas as $res)
                                        @if($penjualans->id_petugas == $res->id)
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
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Penjualan</label>
                                    <input type="text" class="form-control datepicker" name="tanggal_penjualan" required="" value="{{ $penjualans->tanggal_penjualan }}">
                                    <div class="invalid-feedback">
                                        Form Tanggal Penjualan harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Bayar</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="bayar" required="" value="{{ $penjualans->bayar }}">
                                    <div class="invalid-feedback">
                                        Form Bayar harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Sisa</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="sisa" required="" value="{{ $penjualans->sisa }}">
                                    <div class="invalid-feedback">
                                        Form Sisa harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="total" required="" value="{{ $penjualans->total }}">
                                    <div class="invalid-feedback">
                                        Form Total harus diisi!
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
    $('#penjualanMenuLink').addClass('active');
    $('#dataPenjualanLink').addClass('active');
</script>
@endsection