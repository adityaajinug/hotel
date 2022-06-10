<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?= base_url('assets/') ?>/images/big/auth-bg.jpg) no-repeat center center;">
  <div class="auth-box row">
    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?= base_url('assets/') ?>images/hotel.jpg);">
    </div>
    <div class="col-lg-5 col-md-7 bg-white">
      <div class="p-3">
        <div class="text-center">
          <img src="<?= base_url('assets') ?>/images/big/icon.png" alt="wrapkit">
        </div>
        <h2 class="mt-3 text-center">Form Register</h2>
        <p class="text-center">Masukkan username dan password untuk masuk ke bagian admin.</p>
        <form class="mt-4" method="POST" action="<?= base_url('login/aksi_reg') ?>">
          <div class=" row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="text-dark" for="uname">Username</label>
                <input class="form-control" id="uname" name="username" type="text" placeholder="Masukkan username">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label class="text-dark" for="pwd">Password</label>
                <input class="form-control" id="pwd" type="password" name="password" placeholder="Masukkan password">
              </div>
            </div>
            <div class="col-lg-12 text-center">
              <button type="submit" class="btn btn-block btn-dark">Registrasi</button>
            </div>
            <div class="col-lg-12 text-center mt-5">
              Do you have an account? <a href="<?= base_url('login') ?>" class="text-danger">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>