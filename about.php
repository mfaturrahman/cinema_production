
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Tentang <span>Kami</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::about_us part start::-->
    <section class="about_us section_padding">
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

                        <p><?php echo $data['content']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>Project Kami</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->

    <!--::review_part part start::-->
    <section class="review_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="review_img">
                        <img src="assets/img/review_bg.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="review_slider owl-carousel">
                        <div class="review_part_text">
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
