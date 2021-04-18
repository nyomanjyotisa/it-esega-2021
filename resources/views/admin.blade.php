@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Transaction Kos</h4>
                    <p class="card-description">
                    Ini adalah daftar transaksi kosan.
                    </p>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer</th>
                    <th>Kamar</th>
                    <th>Tanggal Ngekos</th>
                    <th>Durasi</th>
                    <th>Total Biaya</th>   
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection