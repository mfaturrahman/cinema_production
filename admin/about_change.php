
    <?php 
    
    $result = $koneksi->query("SELECT * FROM pages WHERE id=1");
    $data = $result->fetch_assoc();
    
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-body pad">
              <div class="mb-1">
                <form method="post" enctype="multipart/form-data">
                  <textarea class="textarea" name="text" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $data['content']; ?></textarea>
                  <button name="save" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->

    <?php 
    
    if (isset($_POST['save'])) 
    {
      $sql = "UPDATE pages SET content='".($_POST['text'])."', date='".date('Y-m-d')."' WHERE id = 1";

      if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil di simpan!')</script>";
        echo "<script>window.location.href = 'index.php?halaman=about';</script>";
      }
    }

    ?>