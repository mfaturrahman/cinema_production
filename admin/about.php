
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Editor</th>
                  <th>Update Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                    $result=$koneksi->query("SELECT * FROM pages");
                    while($data = $result->fetch_assoc()){
                ?>

                <tr>
                  <td><?php echo $data['title']; ?></td>
                  <td><?php echo $data['editor']; ?></td>
                  <td><?php echo $data['date']; ?></td>
                  <td>
                      <a class="btn btn-sm btn-success" href="index.php?halaman=about_change" role="button"><i class="fa fa-edit"></i> Ubah</a>
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