
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <a class="btn btn-sm btn-success mb-3" href="index.php?halaman=add_portfolio" role="button"><i class="fa fa-plus"></i> Add Portfolio</a>
              <table id="example1" class="table table-striped">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Alamat</th>
                  <th>Waktu Mulai</th>
                  <th>Waktu Selesai</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>

                <?php 
                    $result=$koneksi->query("SELECT * FROM portfolio");
                    while($data = $result->fetch_assoc()){
                ?>

                <tr>
                  <td><?php echo $data['title']; ?></td>
                  <td>
                    <?php 
                      $category = ['weeding', 'fashion', 'portrait', 'lanscape'];
                      echo ucwords($category[$data['category']-1]);
                    ?>
                  </td>
                  <td><?php echo $data['address']; ?></td>
                  <td><?php echo $data['start_time']."/".$data['start_date']; ?></td>
                  <td><?php echo $data['end_time']."/".$data['end_date']; ?></td>
                  <td>
                      <a class="btn btn-sm btn-success" href="index.php?halaman=portfolio_change&id=<?php echo $data['id']; ?>" role="button"><i class="fa fa-edit"></i> Ubah</a>
                      <a class="btn btn-sm btn-danger" href="portfolio_delete.php?id=<?php echo $data['id']; ?>" role="button" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->