<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-warning">Data Kendaraan</h6>
            </div>
            <div class="container">
              <div class="row">
                  <div class="col-lg-3 ">
                  </div>
                  <div class="col-lg-6 ">
                    <?php Flasher::flash(); ?>
                  </div>
              </div>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-success btn-icon-split mb-4" data-toggle="modal" data-target="#modal-tambah-mobil">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Mobil</span>
              </a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Aksi</th>
                      <th>id</th>
                      <th>tipe</th>
                      <th>lokasi</th>
                      <th>harga Sewa</th>
                      <th>plat Nomor</th>
                      <th>tahun</th>
                      <th>keterangan</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach( $data['mobil'] as $mobil ) : ?>
                    <tr>
                      <td>
                      <a href="#" class="btn btn-info btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                          </span>
                          <span class="text">Detail</span>
                        </a>


                        <a href="#" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                          </span>
                          <span class="text">Hapus</span>
                        </a>


                        <a href="#" class="btn btn-light btn-icon-split">
                          <span class="icon text-gray-600">
                            <i class="fas fa-arrow-right"></i>
                          </span>
                          <span class="text">Edit</span>
                        </a>


                      </td>
                      <td><?= $mobil['id']; ?></td>
                      <td><?= $mobil['tipe']; ?></td>
                      <td><?= $mobil['lokasi']; ?></td>
                      <td><?= $mobil['harga_sewa']; ?></td>
                      <td><?= $mobil['plat_nomor']; ?></td>
                      <td><?= $mobil['tahun']; ?></td>
                      <td><?= $mobil['keterangan']; ?></td>
                      <td>
                        <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $mobil['image'] ).'"/>';?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Page Pagination Start -->
            <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-pagi">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <?php $i=1;
                            while ($i <= ceil(count($data['mobil'])/8)):
                            ?>
                            <li class="page-item <?php if($data['aktif']==$i) echo 'active'; ?>"><a class="page-link" href="#"><?= $i ?></a></li>
                            <?php $i++;    endwhile;
                            ?>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
              </div>
            </div>
            </div>
            <!-- Page Pagination End -->
          </div>

        </div>
        <!-- /.container-fluid -->

        <!--== Modal tambah mobil ==-->
              <div class="modal fade" id="modal-tambah-mobil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Mobil</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?= BASEURL; ?>/admin/tambahMobil" method="post" enctype="multipart/form-data">
                          <div class="car-choose" style="padding: 2px;">
                              <p>Tipe Mobil</p>
                              <select class="custom-select" name="tipe" required>
                                  <option selected disabled>Tipe Mobil</option>
                                  <?php foreach( $data['tipe'] as $lokasi ) : ?>
                                    <option value="<?= $lokasi['id']; ?>"><?= $lokasi['nama_tipe']; ?></option>
                                  <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="pick-location" style="padding: 2px;">
                              <p>Pilih Lokasi</p>
                              <select class="custom-select" name="lokasi" required>
                                <option selected disabled>Pilih Lokasi</option>
                                <?php foreach( $data['lokasi'] as $tipe ) : ?>
                                  <option value="<?= $tipe['id']; ?>"><?= $tipe['lokasi']; ?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                            <input type="number" placeholder="Harga Sewa" name="harga_sewa" required>
                          </div>
                          <div class="form-group">
                            <input type="text" placeholder="Plat Nomor" name="plat_nomor" required>
                          </div>
                          <div class="form-group">
                            <input type="number" placeholder="Tahun" name="tahun" required >
                          </div>
                          <div class="form-group">
                            <label for="ket">spesifikasi:</label>
                            <?php foreach( $data['spesifikasi'] as $spek ) : ?>
                              <div class="checkbox">
                                <label><input type="checkbox" name="<?= $spek['id']; ?>" value="kecentang"><span data-toggle="tooltip" data-placement="top" title="<?= $spek['keterangan']; ?>">
                                  <?= $spek['spesifikasi']; ?>
                                </span> </label>
                              </div>
                             <?php endforeach; ?>
                          </div>
                          <div class="form-group">
                            <label for="ket">keterangan:</label>
                            <textarea class="form-control" id="ket" name="keterangan" rows="3" required></textarea>
                          </div>
                          <div class="form-group">
                            <label for="ket">gambar mobil:</label>
                            <input type="file" name="image" accept="image/jpeg" required>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                          </div>
                        </form>
                      </div>

                  </div>
                  </div>
              </div>
          <!--== Modal Edit Riwayat End ==-->

      </div>
      <!-- End of Main Content -->
