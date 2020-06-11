<!--== Page Title Area Start ==-->
  <section id="page-title-area" class="section-padding overlay">
      <div class="container">
          <div class="row">
              <!-- Page Title Start -->
              <div class="col-lg-12">
                  <div class="section-title  text-center">
                      <h2>Daftar</h2>
                      <span class="title-line"><i class="fa fa-car"></i></span>
                      <p>Buat akun baru dan mulai Masuk ke website CarDoor.</p>
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
        <div class="container">
          <div class="row">
              <div class="col-lg-3 ">
              </div>
              <div class="col-lg-6 ">
                <?php Flasher::flash(); ?>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-5 col-md-8 m-auto">
                <div class="login-page-content">
                  <div class="login-form">
                    <h3>Buat akun baru</h3>
            <form action="<?= BASEURL; ?>/daftar/tambahAkun" method="post" enctype="multipart/form-data">
              <div class="name">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" placeholder="Nama Awal" name="nm_dpan">
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Nama Akhir" name="nm_blakang">
                  </div>
                </div>
              </div>
              <div class="username">
                <input type="text" placeholder="Username" name="username">
              </div>
              <div class="username">
                <input type="email" placeholder="Email" name="email">
              </div>
              <div class="password">
                <input type="password" placeholder="Kata Sandi" name="password">
                              </div>
              <div class="username">
                <input type="text" placeholder="Nomor KTP" name="no_ktp">
              </div>
              <div class="username">
                <input type="file" name="image" accept="image/*">
              </div>
              <div class="log-btn">
                <button type="submit" name="daftar"><i class="fa fa-check-square"></i> Daftar</button>
              </div>
            </form>
                  </div>
                  <div class="create-ac">
                    <p>Sudah Punya Akun? <a href="<?= BASEURL; ?>/masuk">Masuk</a></p>
                  </div>
                </div>
              </div>
        </div>
      </div>
  </section>
  <!--== Login Page Content End ==-->
