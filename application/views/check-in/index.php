<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('Check_in/tambah_checkIn') ?>" class="btn btn-primary" style="border-radius: 10px;">Tambah Data</a>
      <div class="card mt-3">
        <div class="card-body">
          <h4 class="card-title">Tabel Tamu</h4>

          </h6>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th>No Check In</th>
                  <th>Id Tamu</th>
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

                <tr>
                  <td>asdsadsa</td>
                  <td>saddsadsa</td>
                  <td>sadsadsa</td>
                  <td>sadsadsa</td>
                  <td>dsadsadsa</td>
                  <td>dsadsadsa</td>
                  <td>dsadsadsa</td>
                  <td>dsadsadsa</td>
                  <td>dsadsadsa</td>
                  <td>dsadsadsa</td>


                  <td>
                    <a href="#" class="badge badge-pill badge-success" style="padding: 10px;">Check Out</a>
                    <a href="#" class="badge badge-pill badge-danger" style="padding: 10px;">Delete</a>
                  </td>

                </tr>


            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>