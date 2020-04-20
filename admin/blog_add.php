
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
                            <input type="text" class="form-control" name="title" id="title" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori:</label>
                            <select class="form-control" name="category" id="category-blog">
                                <option value="">Pilih</option>
                                
                                <?php 
                                    $result=$koneksi->query("SELECT category FROM blog GROUP BY category");
                                    while($data = $result->fetch_assoc()){
                                ?>

                                <option value="<?php echo strtolower($data['category']); ?>"><?php echo ucwords($data['category']); ?></option>

                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tag">Tag:</label>
                            <select class="form-control" name="tag[]" id="tag-blog" multiple="multiple">

                                <?php 
                                    $result=$koneksi->query("SELECT tag FROM blog GROUP BY tag");
                                    while($data = $result->fetch_assoc()){
                                        $content = unserialize($data['tag']);
                                ?>

                                <option value="<?php echo $content[0]; ?>"><?php echo ucwords($content[0]); ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <textarea class="textarea" name="text" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

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
        move_uploaded_file($lokasi,"../assets/img/blog/".$nama);

        $title      = $_POST['title'];
        $content    = $_POST['text'];
        $author     = $_SESSION['username'];
        $category   = $_POST['category'];
        $tag        = serialize(array_map('strtolower', $_POST['tag']));
        $date       = date('Y-m-d');
        

        $sql = "INSERT INTO blog (title,content,author,category,tag,date,thumbnail) 
        VALUES ('$title','$content','$author','$category','$tag','$date','$nama')";

        if ($koneksi->query($sql) === TRUE) 
        {
            echo "<script>alert('Data berhasil di simpan!')</script>";
            echo "<script>window.location.href = 'index.php?halaman=blog';</script>";
        }
    }

    ?>