
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pelayanan <span>Terbaik</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::our_service part start::-->
    <section class="our_service padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <p>Layanan Kami</p>
                        <h2>Kami Menawarkan</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_offer_text text-center wedding">
                        <span class="flaticon-love-and-romance"></span>
                        <h4>Wedding Photography</h4>
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