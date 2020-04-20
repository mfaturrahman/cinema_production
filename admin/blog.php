
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <a class="btn btn-sm btn-success mb-3" href="index.php?halaman=add_blog" role="button"><i class="fa fa-plus"></i> Add Post</a>
              <table id="example1" class="table table-striped">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Kategori</th>
                  <th>Tag</th>
                  <th>Tanggal</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>

                <?php 
                    $result=$koneksi->query("SELECT * FROM blog ORDER BY date desc");
                    while($data = $result->fetch_assoc()){
                ?>

                <tr>
                  <td><?php echo $data['title']; ?></td>
                  <td><?php echo $data['author']; ?></td>
                  <td><?php echo $data['category']; ?></td>
                  <td>
                    <?php 
                      $content = unserialize($data['tag']);
                      foreach ($content as $key => $value) {
                        echo $value . ", ";
                      }
                    ?>
                  </td>
                  <td><?php echo $data['date']; ?></td>
                  <td>
                      <a class="btn btn-sm btn-success" href="index.php?halaman=blog_change&id=<?php echo $data['id']; ?>" role="button"><i class="fa fa-edit"></i> Ubah</a>
                      <a class="btn btn-sm btn-danger" href="blog_delete.php?id=<?php echo $data['id']; ?>" role="button" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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