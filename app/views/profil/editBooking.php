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
                                                <div class="team-member-info text-left">
                                                    <h4 class="text-center">Edit Booking</h4>
                                                    <form action="<?= BASEURL; ?>/profil/ubahBooking/<?=$data['transaksi']['id_transaksi'] ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="pick-location" style="padding: 2px;">
                                                            <p>Pilih Lokasi</p>
                                                            <select class="custom-select col-lg-12" name="lokasi">
                                                              <option disable>Pilih Lokasi</option>
                                                              <?php foreach( $data['lokasi'] as $lok ) : ?>
                                                                <option value="<?= $lok['id']; ?>"<?php if($data['transaksi']['lokasi'] == $lok['lokasi']) echo "selected"; ?>><?= $lok['lokasi']; ?></option>
                                                              <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="pick-date" style="padding: 2px;">
                                                            <p>Tgl Rental</p>
                                                            <input type="date" name="tgl_sewa" id="startDate2" placeholder="Tgl Rental" value="<?=$data['transaksi']['tgl_sewa'] ?>">
                                                        </div>

                                                        <div class="retern-date" style="padding: 2px;">
                                                            <p>Tgl Kembali</p>
                                                            <input type="date" name="tgl_kembali" id="endDate2" placeholder="Tgl kembali" value="<?=$data['transaksi']['tgl_kembali'] ?>">
                                                        </div>

                                                        <div class="car-choose" style="padding: 2px;">
                                                            <p>Tipe Mobil</p>
                                                            <select class="custom-select col-lg-12" name="kode_mobil">
                                                                <option disabled>Tipe Mobil</option>
                                                                <?php foreach( $data['mobil'] as $mobil ) : ?>
                                                                  <option value="<?= $mobil['id']; ?>" <?php if($data['transaksi']['id'] == $mobil['id']) echo "selected"; ?>><?= $mobil['nama_tipe']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary col-lg-6" data-dismiss="modal" onclick="window.location.href='<?= BASEURL; ?>/profil'">Kembali</button>
                                                        <button type="submit" class="btn btn-primary col-lg-6" name="ubahBooking">Simpan Perubahan</button>
                                                    </div>
                                                  </form>
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
