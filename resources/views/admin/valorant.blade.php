@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Valorant Teams</h4>
                    <p class="card-description">
                    Ini adalah daftar Valorant team
                    </p>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Team</th>
                    <th>Tanggal Registrasi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                    <tr>
                        <td>{{$team->id}}</td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->created_at}}</td>
                        <td>
                        @if($team->status=='not_paid')    
                        <span class="badge badge-danger">Not Paid</span>
                        @elseif($team->status=='paid')
                        <span class="badge badge-success">Paid</span>
                        @endif
                        </td>
                        <td>
                            <a href="">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                    <i class="ti-eye"></i>
                                </button>
                            </a>
                            <a href="">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onclick="return confirm ('Hapus Transaksi dengan id ?')">
                                    <i class="ti-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection