<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-warning">Data User</h6>
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
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>status</th>
                      <th>id</th>
                      <th>usernamee</th>
                      <th>email</th>
                      <th>password</th>
                      <th>nm_dpan</th>
                      <th>nm_blakang</th>
                      <th>no_ktp</th>
                      <th>image</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach( $data['pengguna'] as $pengguna ) : ?>
                    <tr>
                      <?php if( $pengguna['status'] == 'aktif' ) : ?>
                      <td>
                        <a href="#" class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#blockModal" data-id="<?= $pengguna['id']; ?>">
                          <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">Block</span>
                        </a>
                      </td>
                      <?php endif; ?>
                      <?php if( $pengguna['status'] == 'terblokir' ) : ?>
                      <td>
                        <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#unblockModal" data-id="<?= $pengguna['id']; ?>">
                          <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">Unblock</span>
                        </a>
                      </td>
                      <?php endif; ?>
                      <td><?= $pengguna['id']; ?></td>
                      <td><?= $pengguna['username']; ?></td>
                      <td><?= $pengguna['email']; ?></td>
                      <td><?= $pengguna['password']; ?></td>
                      <td><?= $pengguna['nm_dpan']; ?></td>
                      <td><?= $pengguna['nm_blakang']; ?></td>
                      <td><?= $pengguna['no_ktp']; ?></td>
                      <td>
                        <img class=".img-fluid mh-100" style="width: 100px;" src="<?= BASEURL; ?>/assets/img/profil/<?= $pengguna['image']; ?>" alt="">
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
                            while ($i <= ceil(count($data['user'])/8)):
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

      </div>
      <!-- End of Main Content -->
