
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <a class="btn btn-sm btn-success mb-3" href="index.php?halaman=add_services" role="button"><i class="fa fa-plus"></i> Add Services</a>
              <table id="example1" class="table table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Service</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                    $result=$koneksi->query("SELECT * FROM services");
                    while($data = $result->fetch_assoc()){
                ?>

                <tr>
                  <td><?php echo $data['title']; ?></td>
                  <td><?php echo "Rp. ". number_format($data['price']) . "/" . $data['price_alt']; ?></td>
                  <td>
                    <?php 
                      $content = unserialize($data['content']);
                      foreach ($content as $key => $value) {
                        echo $value . ", ";
                      }
                    ?>
                  </td>
                  <td>
                      <a class="btn btn-sm btn-success" href="index.php?halaman=services_change&id=<?php echo $data['id']; ?>" role="button"><i class="fa fa-edit"></i> Ubah</a>
                      <a class="btn btn-sm btn-danger" href="services_delete.php?id=<?php echo $data['id']; ?>" role="button" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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