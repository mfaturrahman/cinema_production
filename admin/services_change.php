
    <?php
        $result=$koneksi->query("SELECT * FROM services WHERE id='$_GET[id]'");
        $data=$result->fetch_assoc();
    ?>

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
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $data['title']; ?>" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="price" id="price" value="<?php echo $data['price']; ?>" placeholder="Price">
                                </div>
                                /
                                <div class="col-md-5">
                                    <select class="form-control" name="price_alt" id="price_alt">
                                        <option value="">Pilih</option>

                                        <?php 
                                        
                                        $service = ['event','orang','foto'];

                                        foreach ($service as $key => $value) { ?>
                                            
                                        <option value="<?php echo $value; ?>" <?php echo ($value == $data['price_alt']) ? "selected" : "";?>><?php echo ucwords($value); ?></option>    
                                        
                                        <?php }; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tag">Service:</label>
                            <select class="form-control" name="service[]" id="tag-blog" multiple="multiple">

                                <?php 
                                    $content=$koneksi->query("SELECT content FROM services GROUP BY content");
                                    while($result = $content->fetch_assoc()){
                                        $services = unserialize($result['content']);
                                        foreach ($services as $key => $value) {
                                            $services1 = unserialize($data['content']);
                                ?>

                                <option value="<?php echo $value; ?>"
                                <?php
                                foreach ($services1 as $key1 => $value1) {
                                    echo ($value == $value1) ? "selected" : "";
                                }
                                ?>
                                ><?php echo ucwords($value); ?></option>

                                <?php }} ?>
                            </select>
                        </div>
                        <button name="save" class="btn btn-sm btn-primary">Simpan</button>
                        <a href="index.php?halaman=services" class="btn btn-sm btn-default">Kembali</a>
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
        
        $title  = $_POST['title'];
        $price  = $_POST['price'];
        $price_alt  = $_POST['price_alt'];
        $service= serialize($_POST['service']);

        if (!empty($lokasi))
        {
            move_uploaded_file($lokasi,"../assets/img/icon/".$nama);

            $sql = "UPDATE services SET title='$title',price='$price',price_alt='$price_alt',content='$service',icon='$nama' WHERE id='$_GET[id]'";
            if ($koneksi->query($sql) === TRUE) 
            {
                echo "<script>alert('Data berhasil di simpan!')</script>";
                echo "<script>window.location.href = 'index.php?halaman=services';</script>";
            }
        }
        else
        {
            $sql = "UPDATE services SET title='$title',price='$price',price_alt='$price_alt',content='$service' WHERE id='$_GET[id]'";
            if ($koneksi->query($sql) === TRUE) 
            {
                echo "<script>alert('Data berhasil di simpan!')</script>";
                echo "<script>window.location.href = 'index.php?halaman=services';</script>";
            }
        }
    }

    ?>