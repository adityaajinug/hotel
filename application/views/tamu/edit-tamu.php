<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Edit Data Tamu</h4>
          <form class="mt-3 form-horizontal" method="POST" action="<?= base_url('tamu/aksi_edit_tamu') ?>">
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" name="id_tamu" id="inputHorizontalSuccess" placeholder="Masukkan Nama" value="<?= $tamu_id['id_tamu']; ?>">
                <input type="text" class="form-control" name="nama" id="inputHorizontalSuccess" placeholder="Masukkan Nama" value="<?= $tamu_id['nama']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Alamat </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="alamat" id="inputHorizontalSuccess" placeholder="Masukkan Alamat" value="<?= $tamu_id['alamat']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">No KTP <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="no_ktp" id="inputHorizontalSuccess" placeholder="Masukkan No KTP" value="<?= $tamu_id['no_ktp']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Telp/Hp </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp" value="<?= $tamu_id['telp']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-6" style="display: flex;">
                <button class=" btn btn-primary" style="border-radius: 10px;width:150px" type="submit">Ubah Data</button>
                <a href="#" class="btn btn-danger ml-3" style="border-radius: 10px;width:150px" type="submit">Batal</a>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>