<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Kamar</h4>
          </h6>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th>No Kamar</th>
                  <th>Tipe</th>
                  <th>Fasilitas</th>
                  <th>Harga</th>
                  <th>Status</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($kamar as $k) : ?>
                  <tr>

                    <td><?= $k['no_kamar'] ?></td>
                    <td><?= $k['tipe'] ?></td>
                    <td><?= $k['fasilitas'] ?></td>
                    <td><?= $k['harga'] ?></td>
                    <td><?= $k['status'] ?></td>

                  </tr>
                <?php endforeach; ?>

              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>