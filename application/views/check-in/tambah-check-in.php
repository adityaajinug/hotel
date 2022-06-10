<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Input Tamu Menginap (Check In)</h4>
          <form class="mt-3 form-horizontal" method="POST" action="<?= base_url('check_in/aksi_tambah_checkIn') ?>">
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">No Check In <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_check_in" id="inputHorizontalSuccess" placeholder="Masukkan No Check In">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Nama Tamu <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <select class="form-control" id="exampleFormControlSelect1" name="id_tamu">
                  <option>--Pilih Tamu--</option>
                  <?php foreach ($tamu as $t) : ?>
                    <option value="<?= $t['id_tamu'] ?>"><?= $t['nama'] ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">No Kamar <span class="text-danger">*</span></label>
              <div class="col-sm-10">
                <select class="form-control" id="kamar" name="no_kamar">

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Tipe </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tipe" id="tipe" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Biaya/Hari </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="biaya" id="biaya" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Tgl Check In </label>
              <div class="col-sm-10">
                <input type="date" class="form-control " name="tgl_check_in" id="inputHorizontalSuccess">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Tgl Check Out </label>
              <div class="col-sm-10">
                <input type="date" class="form-control " name="tgl_check_out" id="inputHorizontalSuccess">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Lama Inap </label>
              <div class="col-sm-1">
                <input type="number" class="form-control " name="lama_inap" id="lamaInap" placeholder="Masukkan Lama Inap" min="1" value="1">

              </div>
              <div class="col-sm-1 mt-2">
                <p>Hari</p>

              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Biaya Kamar </label>
              <div class="col-sm-10">
                <input type="text" class="form-control " name="biaya_kamar" id="biayaKamar" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Biaya Extrabed</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="biaya_extrabed" id="biayaExtrabed">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Total Biaya </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="total_biaya" id="totalBiaya" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Status </label>
              <div class="col-sm-2">
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                  <option value="IN">IN</option>
                  <option value="OUT">OUT</option>

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

<script>
  document.addEventListener('DOMContentLoaded', async () => {

    const containerKamar = document.getElementById('kamar')

    const tipe = document.getElementById('tipe')
    const biaya = document.getElementById('biaya')
    const lamaInap = document.getElementById('lamaInap')
    const biayaKamar = document.getElementById('biayaKamar')
    const biayaExtrabed = document.getElementById('biayaExtrabed')
    const totalBiaya = document.getElementById('totalBiaya')
    let listKamar = [];


    listKamar = await ambilDataKamar()
    containerKamar.innerHTML = `<option>--Pilih No Kamar--</option>` +
      listKamar.map(d => `<option value="${d.no_kamar}">${d.no_kamar}</option>`).join('')

    const listOption = containerKamar.querySelectorAll('option')
    containerKamar.onchange = () => {
      tipe.value = listKamar[containerKamar.selectedIndex].tipe
      biaya.value = listKamar[containerKamar.selectedIndex].harga

      totalBiaya.value = biaya.value = listKamar[containerKamar.selectedIndex].harga
      biayaKamar.value = biaya.value * lamaInap.value


    }
    lamaInap.onchange = (e) => {
      if (biaya.value == '') {
        alert('pilih kamar terlebih dahulu')
      } else {
        biayaKamar.value = parseInt(e.target.value) * parseInt(biaya.value)
        totalBiaya.value = biayaKamar.value
      }

    }
    biayaExtrabed.oninput = (e) => {
      if (e.target.value == '' || e.target.value.length == 0) {
        totalBiaya.value = biayaKamar.value
      } else if (parseInt(e.target.value) == 0) {
        totalBiaya.value = biayaKamar.value
      } else {
        totalBiaya.value = parseInt(biayaKamar.value) * parseInt(e.target.value)
      }
    }

  });
  const ambilDataKamar = () => {
    return fetch('<?= base_url('check_in/list_kamar') ?>')
      .then(r => {
        if (r.ok) {
          return r.json();
        } else {
          console.log('ga keambil')
        }

      })
      .then(d => d)
      .catch(e => console.log(e))
  };
  // console.log('<?= base_url('hotel/check_in/list_kamar') ?>')
</script>