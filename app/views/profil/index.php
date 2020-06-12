<?php
error_reporting(0);
if(!isset($_SESSION)){
  session_start();
}
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']== 1){
		header('Location: ' . BASEURL . '/admin');
	}else if (!($_SESSION['role']== 2)){
    header('Location: ' . BASEURL . '/masuk');
  }
 ?>
<!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Profil Anda</h2>
                        <div class="team-mem-icon" style="display: block; margin-left: auto; margin-right: auto;">
                            <img src="<?= BASEURL; ?>/assets/img/profil/<?= $data['user']['image']; ?>" alt="JSOFT">
                        </div>
                        <div>
                            <button type="button" class="map-show" style="border: none; cursor: pointer;" data-toggle="modal" data-target="#modal-profil">EDIT PROFIL SAYA</button>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Profil Content Start ==-->
    <section id="help-desk-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                           <!-- Team Tab Content start -->
                            <div class="col-lg-12">
                                <div class="tab-content" id="myTabContent">
                                    <!-- Single Team  start -->
                                    <div class="tab-pane fade show active" id="team_member_1" role="tabpanel" aria-labelledby="tab_item_1">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                              <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3 ">
                                                    </div>
                                                    <div class="col-lg-6 ">
                                                      <?php Flasher::flash(); ?>
                                                    </div>
                                                </div>
                                              </div>
                                              <a href="#" class="btn btn-success btn-icon-split mb-4" data-toggle="modal" data-target="#modal-riwayat">
                                                <span class="icon text-white-50">
                                                  <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="text">Booking</span>
                                              </a>
                                                <div class="team-member-info text-left">
                                                    <h4>Riwayat Booking</h4>
                                                <div style="padding: 2%;">
                                                    <table class="table">
                                                        <thead class="bg-warning">
                                                          <tr>
                                                            <th scope="col">NO</th>
                                                            <th scope="col">LOKASI</th>
                                                            <th scope="col">TGL RENTAL</th>
                                                            <th scope="col">TGL KEMBALI</th>
                                                            <th scope="col">TIPE MOBIL</th>
                                                            <th scope="col">TINDAKAN</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php $i=1; foreach( $data['transaksi'] as $trk ) : ?>
                                                          <tr>
                                                            <th scope="row"><?= $i ?></th>
                                                            <td><?= $trk['lokasi']; ?></td>
                                                            <td><?= $trk['tgl_sewa']; ?></td>
                                                            <td><?= $trk['tgl_kembali']; ?></td>
                                                            <td><?= $trk['nama_tipe']; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" onclick="window.location.href='<?= BASEURL; ?>/profil/editBooking/<?= $trk['id_transaksi']; ?>'">Edit</button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal" data-id="<?= $trk['id_transaksi']; ?>">Hapus</button>
                                                            </td>
                                                          </tr>
                                                          <?php $i++; endforeach; ?>
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team  End -->
                                </div>
                            </div>
                            <!-- Team Tab Content End -->
                        </div>
                    </div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Profil Content End ==-->

    <!--== Modal Edit Riwayat Start ==-->
        <div class="modal fade" id="modal-riwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">BOOKING</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="<?= BASEURL; ?>/profil/tambahBooking" method="post">
                <div class="modal-body">
                  <div class="pick-location" style="padding: 2px;">
                      <p>Pilih Lokasi</p>
                      <select class="custom-select" id="lokasi" name="lokasi" required>
                        <option selected disabled>Pilih Lokasi</option>
                        <?php foreach( $data['lokasi'] as $tipe ) : ?>
                          <option value="<?= $tipe['id']; ?>"><?= $tipe['lokasi']; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>

                    <div class="pick-date" style="padding: 2px;">
                        <p>Tgl Rental</p>
                        <input type="date" name="tgl_sewa" id="startDate2" placeholder="Tgl Rental">
                    </div>

                    <div class="retern-date" style="padding: 2px;">
                        <p>Tgl Kembali</p>
                        <input type="date" name="tgl_kembali" id="endDate2" placeholder="Tgl kembali">
                    </div>

                    <div class="car-choose" style="padding: 2px;">
                        <p>Tipe Mobil</p>
                        <select class="custom-select" id="tipe" name="kode_mobil" required>
                            <option selected disabled>Tipe Mobil</option>
                            <?php foreach( $data['mobil'] as $mobil ) : ?>
                              <option value="<?= $mobil['id']; ?>"><?= $mobil['nama_tipe']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="booking">booking</button>
                </div>
                </form>

            </div>
            </div>
        </div>
    <!--== Modal add Riwayat End ==-->

    <!--== Modal Edit Profil Start ==-->
        <div class="modal fade" id="modal-profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">EDIT PROFIL SAYA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="index.html" class="login-form">
                        <div class="name">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Nama Awal</p>
                                    <input type="text" placeholder="Nama Awal" required>
                                </div>
                                <div class="col-md-6">
                                    <p>Nama Akhir</p>
                                    <input type="text" placeholder="Nama Akhir" required>
                                </div>
                            </div>
                        </div>
                        <div class="username">
                            <p>Email</p>
                            <input type="text" placeholder="Email" required>
                        </div>
                        <div class="password">
                            <p>Kata Sandi</p>
                            <input type="text" placeholder="Kata Sandi" required>
                        </div>
                        <div class="noKTP">
                            <p>Nomer KTP</p>
                            <input type="text" placeholder="Nomor KTP" required>
                        </div>
                        <div class="fotoprofil">
                            <p>Foto Profil</p>
                            <button type="button" class="btn btn-secondary">Edit Foto Profil</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
            </div>
        </div>
    <!--== Modal Edit Profil End ==-->
    <!-- hapus Modal-->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">yakin di hapus?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "delete" untuk ngehapusnya.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-warning" href="<?= BASEURL; ?>/profil/hapusBooking/">delete</a>
          </div>
        </div>
      </div>
    </div>
