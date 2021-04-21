@extends('layouts.default')

    @section('content')
    <div class="">
        <div class="content-wrapper d-flex justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pendaftaran Lomba PUBGM</h4>
                  <p class="card-description">
                    Lengkapi Semua Kolom Ya
                  </p>
                  <form class="forms-sample" action="/daftar/pubgm/submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="form-group">
                            <label for="namaTeam">Nama Team</label>
                            <input type="text" class="form-control" id="namaTeam" name="namaTeam" placeholder="Nama Team" required>
                        </div>
                      </div>
                      <div class="form-section  mt-5 pt-5">
                        <div class="form-group">
                            <label for="namaKetua">Nama Ketua Team</label>
                            <input type="text" class="form-control" id="namaKetua" name="namaKetua" placeholder="Nama Ketua Team" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Nick</label>
                            <input type="text" class="form-control" id="nickKetua" name="nickKetua" placeholder="Nick" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">ID</label>
                            <input type="text" class="form-control" id="idKetua" name="idKetua" placeholder="ID(Server)" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Alamat</label>
                            <input type="text" class="form-control" id="alamatKetua" name="alamatKetua" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">No HP/Wa</label>
                            <input type="text" class="form-control" id="nohpKetua" name="nohpKetua" placeholder="No HP/Wa" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">ID Line</label>
                            <input type="text" class="form-control" id="lineKetua" name="lineKetua" placeholder="ID Line" required>
                        </div>
                      </div>
                      <div class="form-section mt-5 pt-5">
                        <div class="form-group">
                            <label for="namaKetua">Nama Member Tim 2</label>
                            <input type="text" class="form-control" id="nama2" name="nama2" placeholder="Nama Member Tim 2" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Nick</label>
                            <input type="text" class="form-control" id="nick2" name="nick2" placeholder="Nick" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">ID(Server)</label>
                            <input type="text" class="form-control" id="id2" name="id2" placeholder="ID(Server)" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Alamat</label>
                            <input type="text" class="form-control" id="alamat2" name="alamat2" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">No HP/Wa</label>
                            <input type="text" class="form-control" id="nohp2" name="nohp2" placeholder="No HP/Wa" required>
                        </div>
                      </div>
                      <div class="form-section mt-5 pt-5">
                        <div class="form-group">
                            <label for="namaKetua">Nama Member Tim 3</label>
                            <input type="text" class="form-control" id="nama3" name="nama3" placeholder="Nama Member Tim 3" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Nick</label>
                            <input type="text" class="form-control" id="nick3" name="nick3" placeholder="Nick" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">ID(Server)</label>
                            <input type="text" class="form-control" id="id3" name="id3" placeholder="ID(Server)" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Alamat</label>
                            <input type="text" class="form-control" id="alamat3" name="alamat3" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">No HP/Wa</label>
                            <input type="text" class="form-control" id="nohp3" name="nohp3" placeholder="No HP/Wa" required>
                        </div>
                      </div>
                      <div class="form-section mt-5 pt-5">
                        <div class="form-group">
                            <label for="namaKetua">Nama Member Tim 4</label>
                            <input type="text" class="form-control" id="nama4" name="nama4" placeholder="Nama Member Tim 4" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Nick</label>
                            <input type="text" class="form-control" id="nick4" name="nick4" placeholder="Nick" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">ID(Server)</label>
                            <input type="text" class="form-control" id="id4" name="id4" placeholder="ID(Server)" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Alamat</label>
                            <input type="text" class="form-control" id="alamat4" name="alamat4" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">No HP/Wa</label>
                            <input type="text" class="form-control" id="nohp4" name="nohp4" placeholder="No HP/Wa" required>
                        </div>
                      </div>
                      <div class="form-section mt-5 pt-5">
                        <div class="form-group">
                            <label for="namaKetua">Nama Member Tim Cadangan</label>
                            <input type="text" class="form-control" id="nama5" name="nama5" placeholder="Nama Member Tim 5" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Nick</label>
                            <input type="text" class="form-control" id="nick5" name="nick5" placeholder="Nick" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">ID(Server)</label>
                            <input type="text" class="form-control" id="id5" name="id5" placeholder="ID(Server)" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">Alamat</label>
                            <input type="text" class="form-control" id="alamat5" name="alamat5" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKetua">No HP/Wa</label>
                            <input type="text" class="form-control" id="nohp5" name="nohp5" placeholder="No HP/Wa" required>
                        </div>
                      </div>
                      <div class="form-section mt-5 pt-5">
                        <div class="form-group">
                            <label for="buktiBayar">Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="buktiBayar" name="buktiBayar" required>
                        </div>
                        <div class="form-group">
                            <label for="buktiBayar">KTP Semua Anggota</label>
                            <input type="file" class="form-control" id="ktp" name="ktp" required>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    @endsection