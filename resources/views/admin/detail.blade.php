@extends('layouts.app')

    @section('content')
    <div class="main-panel">
  <div class="content-wrapper">
    <div class="grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Detail Team</h4>
                    <p class="card-description">
                    Ini adalah Halaman Detail Team
                    </p>
                </div>
            </div>
            <div style="height: 500px;" class="mb-5">
                <img class="mh-100 rounded-lg" src="/bukti-bayar/{{$lomba}}/{{$team->proof_of_payment}}" alt="Card image cap"><br>
            </div>
            @if($team->status=='not_approved')
                Status : <span class="badge badge-danger">Not Approved</span>
                <div class="text-center col">
                    <a href="/admin/{{$lomba}}/setpaid/{{$team->id}}" class="trigger-btn btn btn-success">Set Paid</a>
                </div>
            @else
                Status : <span class="badge badge-success">Approved</span>
            @endif
            <div class="table-responsive mt-5">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nick</th>
                    @if($lomba == 'mobilelegend')
                        <th>ID Server</th>
                    @elseif($lomba == 'pubgm')
                        <th>ID Pubgm</th>
                    @elseif($lomba == 'valorant')
                        <th>Tagline</th>
                    @endif
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Id Line</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                    <tr>
                        <td>{{$player->name}}</td>
                        <td>{{$player->nick}}</td>
                        @if($lomba == 'mobilelegend')
                            <td>{{$player->id_server}}</td>
                        @elseif($lomba == 'pubgm')
                            <td>{{$player->id_pubgm}}</td>
                        @elseif($lomba == 'valorant')
                            <td>{{$player->tagline}}</td>
                        @endif
                        <td>{{$player->alamat}}</td>
                        <td>{{$player->no_hp}}</td>
                        <td>{{$player->id_line}}</td>
                        <td>{{$player->role}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            
            <div class="mt-5">
                <!-- <embed src="/KTP/{{$lomba}}/{{$team->ktp}}" width="800px" height="2100px" /> -->
                <iframe src="/KTP/{{$lomba}}/{{$team->ktp}}" style="width: 100%;height: 2000px;border: none;"></iframe>
            </div>
        </div>
        </div>
    </div>
@endsection