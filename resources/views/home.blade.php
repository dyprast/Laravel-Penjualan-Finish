@extends('layouts.template')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Petugas</h4>
            </div>
            <div class="card-body">
              {{ $petugas }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-dolly-flatbed"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jenis Barang</h4>
            </div>
            <div class="card-body">
                {{ $jenis_barangs }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-dolly-flatbed"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Barang Masuk</h4>
            </div>
            <div class="card-body">
                {{ $barangMasuks }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-dolly-flatbed"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Barang</h4>
            </div>
            <div class="card-body">
                {{ $barangs }}
            </div>
          </div>
        </div>
      </div>                  
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Distributor</h4>
            </div>
            <div class="card-body">
                {{ $distributors }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-dolly-flatbed"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Detail Barang Masuk</h4>
            </div>
            <div class="card-body">
                {{ $detailBarangMasuks }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-money-bill-alt"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Penjualan</h4>
            </div>
            <div class="card-body">
                {{ $penjualans }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-money-bill-alt"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Detail Data Penjualan</h4>
            </div>
            <div class="card-body">
                {{ $detailPenjualans }}
            </div>
          </div>
        </div>
      </div>                  
    </div>
</section>
@endsection
