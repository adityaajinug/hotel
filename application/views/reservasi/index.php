<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Reservasi</h4>
          </h6>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">No Kamar</th>
                  <th rowspan="2">Tipe Kamar</th>
                  <th colspan="12">Pemakaian Per Tahun 2022</th>
                  <th rowspan="2">Jumlah Total</th>

                </tr>
                <tr>

                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Mar</th>
                  <th>April</th>
                  <th>Mei</th>
                  <th>Jun</th>
                  <th>Jul</th>
                  <th>Ags</th>
                  <th>Sep</th>
                  <th>Okt</th>
                  <th>Nov</th>
                  <th>Des</th>

                </tr>
              </thead>
              <tbody>

                <?php $no = 1;
                $grandTotal = 0;
                foreach ($reservasi as $r) :
                  $totalBaris = 0;


                ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $r['no_kamar'] ?></td>
                    <td><?= $r['tipe'] ?></td>

                    <?php for ($i = 1; $i <= 12; $i++) :
                      $total = 0;
                      foreach ($r['data'] as $k) {
                        if ($k['bulan'] == $i) {
                          $total = $k['total'];
                          $totalBaris = $totalBaris + $k['total'];
                          $grandTotal = $grandTotal + $k['total'];
                        }
                      } ?>

                      <td>
                        <?= $total; ?>
                      </td>


                    <?php endfor; ?>

                    <td><?= $totalBaris ?></td>
                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                <th colspan="15">Jumlah Total</th>
                <th><?= $grandTotal; ?></th>
              </tfoot>


            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>