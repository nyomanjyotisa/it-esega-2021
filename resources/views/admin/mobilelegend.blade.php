@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Mobile Legend Teams</h4>
                    <p class="card-description">
                    Ini adalah daftar Mobile Legend team
                    </p>
                    <a href="/admin/mobilelegend/export_excel" class="btn btn-success my-3" target="_blank">EXPORT TIM</a>
                    <a href="/admin/mobilelegend/player_export_excel" class="btn btn-success my-3" target="_blank">EXPORT PLAYER</a>
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
                        @if($team->status=='not_approved')    
                        <span class="badge badge-danger">Not Paid</span>
                        @elseif($team->status=='approved')
                        <span class="badge badge-success">Paid</span>
                        @endif
                        </td>
                        <td>
                            <a href="/admin/mobilelegend/detail/{{$team->id}}">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                    <i class="ti-eye"></i>
                                </button>
                            </a>
                            <a href="/admin/mobilelegend/delete/{{$team->id}}">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon" onclick="return confirm ('Hapus Team {{$team->name}}?')">
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