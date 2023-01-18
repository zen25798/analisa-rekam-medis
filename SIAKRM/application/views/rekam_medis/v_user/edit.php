<?php foreach ($users as $key => $u) { ?>
  <div class="modal fade" id="modalEdit<?= $u->id_user ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="kd_user">ID User</label>
              <div class="col-sm-2">
                <input type="text" name="kd_user" id="kd_user" value="<?= $u->kd_user ?>" class="form-control" disabled>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-7">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="nama_users">Nama Lengkap</label>
                <input type="text" name="nama_users" id="nama_users" value="<?= $u->nama_users ?>" class="form-control">
              </div>
            </div>

            <div class="col-lg-5">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="username">Username</label>
                <input type="text" name="username" id="username" value="<?= $u->username ?>" class="form-control" hidden>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $u->email ?>" class="form-control" hidden>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="password">Password</label>
                <input type="password" name="password" id="password" value="<?= $u->password ?>" class="form-control" hidden>
              </div>
            </div>

            <div class="col-lg-2">
              <div class="form-group">
                <label class="col-sm-12 col-form-label" for="roles">Role</label>
                <select class="form-select" name="roles" id="roles" aria-label="Default select example">
                  <option selected>Pilih Role</option>
                  <?php foreach ($roles as $r) { ?>
                    <option value="<?= $u->id_role ?>"><?= $u->role ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $u->tempat_lahir ?>" class="form-control" disabled>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $u->tanggal_lahir ?>" class="form-control" disabled>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label class="col-sm-12 col-form-label" for="JK">Jenis Kelamin</label>
                <select class="form-select" name="JK" id="JK" aria-label="Default select example">
                  <option value="1"><?= $u->JK ?></option>
                  <option value="Perempuan"><?= $u->JK ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="no_ktp">Nomor KTP</label>
                <input type="number" name="no_ktp" id="no_ktp" value="<?= $u->no_ktp ?>" class="form-control">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="no_telp">Nomor Telpon</label>
                <input type="number" name="no_telp" id="no_telp" value="<?= $u->no_telp ?>" class="form-control">
              </div>
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <label class="col-sm-12 col-form-label" for="agama">Agama</label>
                <select class="form-select" name="agama" id="agama" aria-label="Default select example">
                  <option selected>Pilih Agama</option>
                  <option value="ISLAM">1. Islam</option>
                  <option value="PROTESTAS">2. Protestan</option>
                  <option value="KATOLIK">3. Katolik</option>
                  <option value="HINDU">4. Hindu</option>
                  <option value="BUDDHA">5. Buddha</option>
                  <option value="KONGHUCU">6. Konghucu</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-6 col-form-label" for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?= $u->alamat ?>" class="form-control">
          </div>

          <div class="row">
            <div class="col-lg-7">
              <div class="form-group">
                <label class="col-sm-6 col-form-label" for="avatar">Unggah Profil</label>
                <input type="file" name="avatar" id="avatar" class="form-control">
              </div>
            </div>

            <div class="col-lg-5">
              <div class="form-group">
                <div class="form-group">
                  <label class="col-sm-12 col-form-label" for="status">Status Akun</label>
                  <select class="form-select" name="status" id="status" aria-label="Default select example">
                    <option selected>Pilih Status Akun</option>
                    <option value="verification">Verifikasi</option>
                    <option value="unverification">Belum Terverifikasi</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>