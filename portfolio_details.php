
    <?php
        $result=$koneksi->query("SELECT * FROM portfolio WHERE id='$_GET[id]'");
        $data=$result->fetch_assoc();
    ?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>projects details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- gallery_part part start-->
    <section class="project_details section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single_project_item">
                        
                        <center>
                            <img src="assets/img/gallery/<?php echo $data['thumbnail'] ?>" alt="" style="width:50%;">
                        </center>
                        
                        <div class="project_time my-3">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="single_project_details">
                                        <div class="media">
                                            <img src="assets/img/icon/project_details_icon_1.svg" class="mr-4" alt="#">
                                            <div class="media-body">
                                                <h5 class="mt-0">Waktu Mulai</h5>
                                                <span><?php echo date('H:i', strtotime($data['start_time'])) ?></span>
                                                <p><?php echo date('d M Y', strtotime($data['start_date'])) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="single_project_details">
                                        <div class="media">
                                            <img src="assets/img/icon/project_details_icon_2.svg" class="mr-4" alt="#">
                                            <div class="media-body">
                                                <h5 class="mt-0">Waktu Selesai</h5>
                                                <span><?php echo date('H:i', strtotime($data['end_time'])) ?></span>
                                                <p><?php echo date('d M Y', strtotime($data['end_date'])) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="single_project_details">
                                        <div class="media">
                                            <img src="assets/img/icon/project_details_icon_3.svg" class="mr-4" alt="#">
                                            <div class="media-body">
                                                <h5 class="mt-0">Alamat</h5>
                                                <span><?php echo $data['address'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo $data['content'] ?>

                        <!-- <h2>Pasca Weeding Samwinaldy dan Radiah Qoirunnisa</h2>
                        <p>Samwinaldy dan Radiah Qoirunnisa adalah sepasang kekasih yang kebetulan mengenal salah satu
						anggota kami dan menyewa jasa kami untuk acara resepsi dan Pasca Weeding</p>

                        <h4>Deskripsi Project</h4>
                        <p>Project ini adalah salah satu project pertama yang di kerjakan oleh tim kami, walaupun
						kami mengalami beberapa masalah seperti batre yang tidak mencukupi tapi kami jadi mengetahui cara untuk
						mengatasi masalah tersebut</p>
                        <img src="assets/img/gallery/single_project_item_2.png" alt="">
                        <h4>Proses Pengerjaan</h4>
                        <p>Pasca Weeding Samwinaldy Dan Radiah Bertempat di sebuah padang rumput di citra land makassar
						kami menginginkan cahaya yang sedikit kuning keemasan maka dari itu kita memilih jam 14:00
						agar mendapat cahaya yang di inginkan namun sebelum itu kami mengkonfirmasi apakah
						client dapat datang pada waktu yang telah kami tentukan atau tidak</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->
