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
                            <img src="<?= BASEURL; ?>/assets/img/team/team-mem-thumb-1.png" alt="JSOFT">
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
                                                <div class="team-member-info text-left">
                                                    <h4>Riwayat Booking</h4>
                                                <div style="padding: 2%;">
                                                    <table class="table">
                                                        <thead class="bg-warning">
                                                          <tr>
                                                            <th scope="col">NO</th>
                                                            <th scope="col">TGL BOOKING</th>
                                                            <th scope="col">LOKASI</th>
                                                            <th scope="col">TGL RENTAL</th>
                                                            <th scope="col">TGL KEMBALI</th>
                                                            <th scope="col">TIPE MOBIL</th>
                                                            <th scope="col">TINDAKAN</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">1</th>
                                                            <td>1/6/2020</td>
                                                            <td>Bondowoso</td>
                                                            <td>10/6/2020</td>
                                                            <td>12/6/2020</td>
                                                            <td>Toyota Alphard</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-riwayat">Edit</button>
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <th scope="row">2</th>
                                                            <td>1/7/2020</td>
                                                            <td>Bondowoso</td>
                                                            <td>10/7/2020</td>
                                                            <td>12/7/2020</td>
                                                            <td>Toyota</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-riwayat">Edit</button>
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </td>                                                          </tr>
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
                <h5 class="modal-title" id="exampleModalLongTitle">EDIT BOOKING</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="pick-location" style="padding: 2px;">
                        <p>Pilih Lokasi</p>
                        <select class="custom-select">
                          <option selected>Pilih Lokasi</option>
                          <option value="1">Bondowoso</option>
                          <option value="2">Jember</option>
                          <option value="3">Malang</option>
                          <option value="3">Situbondo</option>
                        </select>
                    </div>

                    <div class="pick-date" style="padding: 2px;">
                        <p>Tgl Rental</p>
                        <input id="startDate2" placeholder="Tgl Rental">
                    </div>

                    <div class="retern-date" style="padding: 2px;">
                        <p>Tgl Kembali</p>
                        <input id="endDate2" placeholder="Tgl kembali">
                    </div>

                    <div class="car-choose" style="padding: 2px;">
                        <p>Tipe Mobil</p>
                        <select class="custom-select">
                            <option selected>Tipe Mobil</option>
                            <option value="1">Nissan Navara</option>
                            <option value="2">Toyota Fortuner</option>
                            <option value="3">Toyota Alphard</option>
                            <option value="3">Toyota Camry</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
            </div>
        </div>
    <!--== Modal Edit Riwayat End ==-->

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
