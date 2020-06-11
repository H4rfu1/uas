<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Masuk</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Anda harus masuk sebelum melakukan booking.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
    <div class="container">
        <div class="row">
          <div class="col-lg-3 ">
          </div>
          <div class="col-lg-6 ">
            <?php Flasher::flash(); ?>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-8 m-auto">
              <div class="login-page-content">
                <div class="login-form">
                  <h3>Selamat Datang!</h3>
          <form action="<?= BASEURL; ?>/masuk/auth" method="post">
            <div class="username">
              <input type="text" name="username"placeholder="Email atau Nama Pengguna" required>
            </div>
            <div class="password">
              <input type="password" name="pass" placeholder="Kata Sandi" required>
            </div>
            <div class="log-btn">
              <button type="submit" name="login"><i class="fa fa-sign-in"></i> Masuk</button>
            </div>
          </form>
                </div>
                <div class="create-ac">
                  <p>Belum Memiliki Akun? <a href="<?= BASEURL; ?>/daftar">Daftar</a></p>
                </div>
              </div>
            </div>
      </div>
    </div>
</section>
<!--== Login Page Content End ==-->
