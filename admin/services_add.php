
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="customFile">Icon:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="icon">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                                </div>
                                /
                                <div class="col-md-5">
                                    <select class="form-control" name="price_alt" id="price_alt">
                                        <option value="">Pilih</option>
                                        <option value="event">Event</option>
                                        <option value="orang">Orang</option>
                                        <option value="foto">Foto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag">Service:</label>
                            <select class="form-control" name="service[]" id="tag-blog" multiple="multiple">

                                <?php 
                                    $result=$koneksi->query("SELECT content FROM services GROUP BY content");
                                    while($data = $result->fetch_assoc()){
                                        $content = unserialize($data['content']);
                                        foreach ($content as $key => $value) {
                                ?>

                                <option value="<?php echo $value; ?>"><?php echo ucwords($value); ?></option>

                                <?php }} ?>
                            </select>
                        </div>
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
        $nama   = $_FILES['icon']['name'];
        $lokasi = $_FILES['icon']['tmp_name'];
        move_uploaded_file($lokasi,"../assets/img/icon/".$nama);

        $title  = $_POST['title'];
        $price  = $_POST['price'];
        $price_alt  = $_POST['price_alt'];
        $service= serialize($_POST['service']);

        $sql = "INSERT INTO services (title,price,price_alt,content,icon) VALUES ('$title','$price','$price_alt','$service','$nama')";
        if ($koneksi->query($sql) === TRUE) 
        {
            echo "<script>alert('Data berhasil di simpan!')</script>";
            echo "<script>window.location.href = 'index.php?halaman=services';</script>";
        }
    }

    ?>