
    <!--::banner part start::-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h5>Potrait Photography</h5>
                            <h1>Cinema <span>Production</span></h1>
                            <p>Mengabadikan Momen Indahmu</p>
                            <a href="portfolio.html" class="btn_1">Lihat Hasil Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::banner part start::-->

    <!--::about_us part start::-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center">
                        <h5>Tentang Studio Kami</h5>
                        <h2>Cinema Production</h2>
                        
                        <?php 
                        $result = $koneksi->query("SELECT * FROM pages WHERE id=1");
                        $data = $result->fetch_assoc();
                        ?>

                        <p><?php echo substr($data['content'], 0, 200)."..."; ?></p>

                        <a href="index.php?halaman=about" class="btn_2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->

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

    <!--::our_service part start::-->
    <section class="our_service padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>Layanan Kami</p>
                        <h2>Kami Menawarkan</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center filtr-container">
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        <span class="flaticon-love-and-romance"></span>
                        <h4>wedding photography</h4>
                        <p>Pernikahan adalah momen sekali seumur hidup kita dimana momen itu adalah
						momen terbahagia yang pernah kita rasakan maka dari itu kita harus mengabadikannya dengan baik</p>
                        <a href="#" class="btn_1">read more</a>
                    </div>
                    <div class="single_offer_img d-none d-md-block">
                        <img src="assets/img/single_offer_img_2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single_offer_img d-none d-md-block">
                        <img src="assets/img/single_offer_img_1.png" alt="">
                    </div>
                    <div class="single_offer_text text-center nature">
                        <span class="flaticon-leaf"></span>
                        <h4>Nature photography</h4>
                        <p>Nature Photography adalah sebuah tema foto yang sangat memanjakan mata
						karena dari foto tersebut kita bisa bercerita tentang banyak hal terutama tentang Kekayaan alam kita</p>
                        <a href="#" class="btn_1">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::review_part part start::-->
    <section class="review_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5">
                    <div class="review_img">
                        <img src="assets/img/review_bg.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review_slider owl-carousel">
                        <div class="review_part_text">
                            <h5>TESTIMONI</h5>
                            <h2>Tim Yang Sangat Kompak</h2>
                            <p>Saya melihat mereka bekerja di lapangan secara langsung mereka adalah tim
							yang sangat kompak dan profesional, mereka sudah tahu apa yang harus dilakukan di lapangan</p>
                            <h3>Rizal Paster <span>CEO Kalomang studio</span> </h3>
                        </div>
                        <div class="review_part_text">
                            <h2>Tim Yang Sangat Profesional</h2>
                            <p>Saya melihat mereka bekerja di lapangan secara langsung mereka adalah tim
							yang sangat kompak dan profesional, mereka sudah tahu apa yang harus dilakukan di lapangan</p>
                            <h3>Rizal Paster <span>CEO Kalomang studio</span> </h3>
                        </div>
                        <div class="review_part_text">
                            <h2>Saya sangat puas setelah menyewa jasa mereka</h2>
                            <p>Saya melihat mereka bekerja di lapangan secara langsung mereka adalah tim
							yang sangat kompak dan profesional, mereka sudah tahu apa yang harus dilakukan di lapangan</p>
                            <h3>Rizal Paster <span>CEO Kalomang studio</span> </h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--::review_part part end::-->

    <!--::pricing part start::-->
    <section class="pricing_part section_padding home_page_pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>TABEL HARGA</p>
                        <h2>Harga yang kami tawarkan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                
                <?php 
                    $result=$koneksi->query("SELECT * FROM services");
                    while($data = $result->fetch_assoc()){
                ?>

                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <img src="assets/img/icon/<?php echo $data['icon']; ?>" alt="">
                            <p><?php echo $data['title']; ?></p>
                        </div>
                        <div class="pricing_content">
                            <h3><?php echo "Rp. ".number_format($data['price']); ?><span>/ <?php echo $data['price_alt']; ?></span></h3>
                            <ul>
                                <?php 
                                $content = unserialize($data['content']);
                                foreach ($content as $key => $value) {
                                    echo "<li>".$value."</li>";
                                }
                                ?>
                            </ul>
                            <a href="#" class="btn_2">Booking sekarang</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </section>
    <!--::pricing part end::-->

    <!--::blog part start::-->
    <section class="catagory_post padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section_tittle">
                        <p>Blog Kami</p>
                        <h2>Newest</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="assets/img/blog/blog_1.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5><span> By Michal</span> / March 30 , 2019</h5>
                            <a href="blog.html">
                                <h3>Mad whales gathering open can't</h3>
                            </a>
                            <p>Is life form dominion under very seasons together
                                them divide so, she'd bearing sixth </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="assets/img/blog/blog_2.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5><span> By Michal</span> / March 30 , 2019</h5>
                            <a href="blog.html">
                                <h3>Creepeth grass brought over man</h3>
                            </a>
                            <p>Is life form dominion under very seasons together
                                them divide so, she'd bearing sixth </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_catagory_post post_2">
                        <div class="category_post_img">
                            <img src="assets/img/blog/blog_3.png" alt="">
                        </div>
                        <div class="post_text_1 pr_30">
                            <h5><span> By Michal</span> / March 30 , 2019</h5>
                            <a href="blog.html">
                                <h3>Mad whales gathering open Evening</h3>
                            </a>
                            <p>Is life form dominion under very seasons together
                                them divide so, she'd bearing sixth </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog part end::-->