@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Distributor</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Distributor</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('distributorUpdate', $distributors->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulir</h4>
                    </div>
                    <div class="card-body">
                        <p>Lampiran yang wajib diisi : </p>
                        <ul>
                            <li>Nama Lengkap</li>
                            <li>Kota Asal</li>
                            <li>Email</li>
                            <li>Nomor Telepon</li>
                            <li>Alamat</li>
                            <li>Konfirmasi pemeriksaan data</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Distributor</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" required="" value="{{ $distributors->nama }}">
                                    <div class="invalid-feedback">
                                        Form Nama Lengkap harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Kota Asal</label>
                                    <input type="text" class="form-control" name="kota_asal" required="" value="{{ $distributors->kota_asal }}">
                                    <div class="invalid-feedback">
                                        Form Kota Asal harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required="" value="{{ $distributors->email }}">
                                    <div class="invalid-feedback">
                                        Form Email harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="telp" required="" value="{{ $distributors->telp }}">
                                    <div class="invalid-feedback">
                                        Form Nomor Telepon harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" required>{{ $distributors->alamat }}</textarea>
                                    <div class="invalid-feedback">
                                        Form Periode harus diisi!
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
    $('#dataLink').addClass('active');
    $('#distributorLink').addClass('active');
</script>
@endsection