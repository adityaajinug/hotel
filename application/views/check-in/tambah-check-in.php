<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Input Tamu Menginap (Check In)</h4>
          <form class="mt-3 form-horizontal" method="POST" action="<?= base_url('tamu/aksi_check_in') ?>">
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">No Check In <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputHorizontalSuccess" placeholder="Masukkan Nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Nama Tamu <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <select class="form-control" id="exampleFormControlSelect1">
                  <?php foreach ($tamu as $t) : ?>
                    <option value="<?= $t['id_tamu'] ?>"><?= $t['nama'] ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">No Kamar <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="no_ktp" id="inputHorizontalSuccess" placeholder="Masukkan No KTP">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Tipe </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Biaya/Hari </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Tgl Check In </label>
              <div class="col-sm-10">
                <input type="date" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Tgl Check Out </label>
              <div class="col-sm-10">
                <input type="date" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Lama Inap </label>
              <div class="col-sm-2">
                <input type="number" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan Lama Inap">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Biaya Kamar </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Biaya Extrabed</label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Total Biaya </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="telp" id="inputHorizontalSuccess" placeholder="Masukkan No Telpon/Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Status </label>
              <div class="col-sm-2">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="1">IN</option>
                  <option value="0">OUT</option>

                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-6" style="display: flex;">
                <button class=" btn btn-primary" style="border-radius: 10px;width:150px" type="submit">Simpan Data</button>
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