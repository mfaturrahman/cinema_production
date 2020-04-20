
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-2">
                    <div class="section_tittle">
                        <p>Project Terbaru</p>
                        <h2>Cek Kerjaan Terakhir</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="portfolio-filter filters">
                        <ul>
                            <li class="active" data-filter="all">Semua</li>
                            <li data-filter="1"> Weeding</li>
                            <li data-filter="2">Fashion</li>
                            <li data-filter="3">Portrait</li>
                            <li data-filter="4">Lanscape</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item filtr-container">

                        <?php 
                            $result=$koneksi->query("SELECT * FROM portfolio");
                            while($data = $result->fetch_assoc()){
                        ?>

                        <a href="index.php?halaman=portfolio_details&id=<?php echo $data['id'] ?>" class="img-gal filtr-item" data-category="<?php echo $data['category'] ?>"
                            style="background-image: url('assets/img/gallery/<?php echo $data['thumbnail'] ?>')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>
                                            <?php 
                                                $category = ['weeding', 'fashion', 'portrait', 'lanscape'];
                                                echo ucwords($category[$data['category']-1]);
                                            ?> photography</p>
                                        <h4><?php echo $data['title'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php } ?>

                        <!-- <a href="index.php?halaman=portfolio_details" class="img-gal filtr-item" data-category="1"
                            style="background-image: url('assets/img/gallery/gallery_item_1.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Weeding photography</p>
                                        <h4>Resepsi Samwinaldy</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?halaman=portfolio_details" class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('assets/img/gallery/gallery_item_2.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?halaman=portfolio_details" class="img-gal width-2 filtr-item" data-category="4"
                            style="background-image: url('assets/img/gallery/gallery_item_3.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Lanscape photography</p>
                                        <h4>Taman Bermain</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?halaman=portfolio_details" class="img-gal width-2 filtr-item" data-category="4"
                            style="background-image: url('assets/img/gallery/gallery_item_4.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Lanscape photography</p>
                                        <h4>Dermaga Pangkep</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?halaman=portfolio_details" class="img-gal width-1 filtr-item" data-category="3"
                            style="background-image: url('assets/img/gallery/gallery_item_5.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Potrait photography</p>
                                        <h4>Pantai Batu Batu</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?halaman=portfolio_details" class="img-gal filtr-item" data-category="3"
                            style="background-image: url('assets/img/gallery/gallery_item_6.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Potrait photography</p>
                                        <h4>Sawah Bone</h4>
                                    </div>
                                </div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->

