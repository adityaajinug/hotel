<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('check_in/tambah_checkIn') ?>" class="btn btn-primary" style="border-radius: 10px;">Tambah Data</a>
      <div class="card mt-3">
        <div class="card-body">
          <h4 class="card-title">Tabel Check In</h4>

          </h6>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th>No Check In</th>
                  <th>Id Tamu</th>
                  <th>Nama</th>
                  <th>No Kamar</th>
                  <th>Tipe</th>
                  <th>Tanggal Check in</th>
                  <th>Tanggal Check out</th>
                  <th>Lama Inap</th>
                  <th>Biaya Kamar</th>
                  <th>Biaya Extrabed</th>
                  <th>Total Bayar</th>
                  <th>Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($check_in as $check) : ?>
                  <tr>
                    <td><?= $check['no_checkin'] ?></td>
                    <td><?= $check['id_tamu'] ?></td>
                    <td><?= $check['nama'] ?></td>
                    <td><?= $check['no_kamar'] ?></td>
                    <td><?= $check['tipe'] ?></td>
                    <td><?= $check['tgl_checkin'] ?></td>
                    <td><?= $check['tgl_checkout'] ?></td>
                    <td><?= $check['lama_inap'] ?></td>
                    <td><?= $check['biaya_kamar'] ?></td>
                    <td><?= $check['biaya_extrabed'] ?></td>
                    <td><?= $check['total_bayar'] ?></td>


                    <td>
                      <a href="#" class="badge badge-pill badge-success" data-toggle="modal" data-target="#checkout-form<?= $check['no_checkin'] ?>" style="padding: 10px;">Check Out</a>
                      <a href="<?= base_url('check_in/delete_checkin/' . $check['no_checkin']) ?>" class="badge badge-pill badge-danger" style="padding: 10px;" style="padding: 10px;">Delete</a>
                    </td>

                  </tr>
                <?php endforeach; ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php foreach ($check_in as $sc) : $sc++; ?>
  <div id="checkout-form<?= $sc['no_checkin'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 10px;">
        <div class="modal-body">
          <div class="text-center mt-2 mb-4">
            <i class="fas fa-question-circle" style="font-size: 120px;"></i>
            <p class="mt-3" style="font-size: 24px;color:black;font-weight:600">Yakin Akan Checkout?</p>

          </div>

          <form action="<?= base_url('check_in/checkout') ?>" method="POST" class="pl-3 pr-3">

            <div class="form-group">
              <input class="form-control" type="hidden" name="status_checkin" value="OUT">
              <input type="hidden" value="0" name="status_kamar">
              <input type="hidden" value="<?= $sc['no_checkin'] ?>" name="no_checkin">
              <input type="hidden" value="<?= $sc['no_kamar'] ?>" name="no_kamar">

            </div>
            <div class=" form-group text-center">
              <button class=" btn btn-primary px-5 py-1" type="submit" style="border-radius:10px;">Ya</button>
              <button class="btn btn-danger px-5 py-1" data-dismiss="modal" style="border-radius:10px;">Batal</button>
            </div>
          </form>

          <p></p>


        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>