<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('tamu/tambah_tamu') ?>" class="btn btn-primary" style="border-radius: 10px;">Tambah Data</a>
      <div class="card mt-3">
        <div class="card-body">
          <h4 class="card-title">Tabel Tamu</h4>

          </h6>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th>Id Tamu</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No KTP</th>
                  <th>Telepon</th>
                  <th>Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($tamu as $t) : ?>
                  <tr>
                    <td><?= $t['id_tamu'] ?></td>
                    <td><?= $t['nama'] ?></td>
                    <td><?= $t['alamat'] ?></td>
                    <td><?= $t['no_ktp'] ?></td>
                    <td><?= $t['telp'] ?></td>

                    <td>
                      <a href="#" class="badge badge-pill badge-success" style="padding: 10px;">Edit</a>
                      <a href="#" class="badge badge-pill badge-danger" style="padding: 10px;">Delete</a>
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