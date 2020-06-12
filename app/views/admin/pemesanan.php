<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-warning">Data Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-warning">
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">LOKASI</th>
                      <th scope="col">TGL RENTAL</th>
                      <th scope="col">TGL KEMBALI</th>
                      <th scope="col">TIPE MOBIL</th>
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
                    </tr>
                    <?php $i++; endforeach; ?>
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
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
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

      </div>
      <!-- End of Main Content -->
