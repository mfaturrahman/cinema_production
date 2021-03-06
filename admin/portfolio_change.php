
    <?php
        $result=$koneksi->query("SELECT * FROM portfolio WHERE id='$_GET[id]'");
        $data=$result->fetch_assoc();
    ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="customFile">Thumbnail:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="thumbnail">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Judul:</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $data['title']; ?>" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori:</label>
                            <select class="form-control" name="category" id="category">
                                <option value="">Pilih</option>

                                <?php 
                                    $category = ['weeding', 'fashion', 'portrait', 'lanscape'];
                                    foreach ($category as $key => $value) {
                                ?>

                                <option value="<?php echo $key+1; ?>" <?php echo (($key+1)==$data['category']) ? "selected" : "";?>><?php echo ucwords($value); ?></option>

                                <?php
                                }
                                ?>
                                
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="start_time">Waktu Mulai:</label>
                                    <input type="time" class="form-control" name="start_time" id="start_time" value="<?php echo $data['start_time']; ?>" placeholder="Waktu Mulai">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="start_date">Tanggal Mulai:</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date" value="<?php echo $data['start_date']; ?>" placeholder="Tanggal Mulai">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="end_time">Waktu Selesai:</label>
                                    <input type="time" class="form-control" name="end_time" id="end_time" value="<?php echo $data['end_time']; ?>" placeholder="Waktu Selesai">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="end_date">Tanggal Selesai:</label>
                                    <input type="date" class="form-control" name="end_date" id="end_date" value="<?php echo $data['end_date']; ?>" placeholder="Tanggal Selesai">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $data['address']; ?>" placeholder="Alamat">
                        </div>
                        <textarea class="textarea" name="text" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $data['content']; ?></textarea>

                        <button name="save" class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    <?php 
    
    if (isset($_POST['save'])) 
    {    
        $nama   = $_FILES['thumbnail']['name'];
        $lokasi = $_FILES['thumbnail']['tmp_name'];

        $title      = $_POST['title'];
        $category   = $_POST['category'];
        $start_time = $_POST['start_time'];
        $start_date = $_POST['start_date'];
        $end_time = $_POST['end_time'];
        $end_date = $_POST['end_date'];
        $address = $_POST['address'];
        $content = $_POST['text'];

        if (!empty($lokasi))
        {
            move_uploaded_file($lokasi,"../assets/img/gallery/".$nama);
            $sql = "UPDATE portfolio SET title='$title',category='$category',thumbnail='$nama',start_time='$start_time',
            start_date='$start_date',end_time='$end_time',end_date='$end_date',address='$address',content='$content' WHERE id='$_GET[id]'";

            if ($koneksi->query($sql) === TRUE) 
            {
                echo "<script>alert('Data berhasil di simpan!')</script>";
                echo "<script>window.location.href = 'index.php?halaman=portfolio';</script>";
            }
        }
        else 
        {
            $sql = "UPDATE portfolio SET title='$title',category='$category',start_time='$start_time',
            start_date='$start_date',end_time='$end_time',end_date='$end_date',address='$address',content='$content' WHERE id='$_GET[id]'";

            if ($koneksi->query($sql) === TRUE) 
            {
                echo "<script>alert('Data berhasil di simpan!')</script>";
                echo "<script>window.location.href = 'index.php?halaman=portfolio';</script>";
            }
        }
    }

    ?>