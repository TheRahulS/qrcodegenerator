<?php
include 'header_1.php';
?>
     <!-- <a href="https://www.instagram.com/<?php echo $instagram; ?>/" class="btn btn-error contact-link rounded-circle" target="_blank"><i class="fa fa-instagram" style="font-size:36px"></i>
                    </a>
                    <a href="https://www.facebook.com/<?php echo $facebook; ?>/" class="btn btn-error contact-link rounded-circle" target="_blank"><i class="fa fa-facebook" style="font-size:36px"></i>
                    </a>
                    <a href="https://www.twitter.com/<?php echo $twitter; ?>/" class="btn btn-error contact-link rounded-circle" target="_blank"><i class="fa fa-twitter" style="font-size:36px"></i>
                    </a> -->
<!-- <a href="https://linkedin.com/in/<?php echo $linkedln; ?>" class="btn btn-error contact-link rounded-circle" target="_blank">
                        <i class="fa fa-linkedin-square" style="font-size:36px"></i>
                    </a>-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner slide-back">
        <div class="carousel-item active">
            <img src="images/slider/slider1.webp" alt="" srcset="">

            <div class="container-fluid ">
                <div class="carousel-caption text-start  text-dark slide-back">
                    <h1>DIGITAL BUSINESS CARD </h1>
                    <p>A digital business card, often known as a digital card, is a modern approach to
                        sharing your
                        professional identity. It's a virtual representation of your contact information, including your
                        name, job title, company details, and various ways to reach you – all conveniently accessible on
                        a smartphone or computer.</p>
                    <p><a class="btn btn-lg btn-primary" href="form2.php">Create Digital card</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slider/slider2.png" alt="" srcset="">

            <div class="container-fluid">
                <div class="carousel-caption slide-back text-dark">
                    <h1>File Converter </h1>
                    <p>A file converter is a digital tool designed to effortlessly convert one file format into another.
                        Whether it's converting documents, images, audio, or video, this versatile utility empowers you
                        to adapt, share, and collaborate without constraints.</p>
                    <!-- <p><a class="btn btn-lg btn-warning" href="#">Convert File</a></p> -->
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slider/slider3.png" alt="" srcset="">


            <div class="container">
                <div class="carousel-caption  slide-back text-dark">
                    <h1>File Compressor</h1>
                    <p> With a file compressor, you can seamlessly reduce the bulk of documents, images, videos, and
                        more. Whether you're sending files via email, storing data on the cloud, or simply organizing
                        your digital life, this tool lets you do it with ease</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#">Compress File</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section>
    <div class="container tab-select mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="nav-gen">
                    <li>
                        <a href="#" class="">
                            <div class="nav_icon_img"><i class="fa fa-id-card"></i></div>
                            <div class="nav_text"
                                style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">
                                Digital Business Cards</div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="">
                            <div class="nav_icon_img"><i class="fa fa-qrcode"></i></div>
                            <div class="nav_text"
                                style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">QR
                                Generator</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <div class="nav_icon_img"><i class="fa fa-qrcode"></i></div>
                            <div class="nav_text"
                                style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">QR
                                Scan</div>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="">
                            <div class="nav_icon_img"><i class="fa fa-icon"></i></div>
                            <div class="nav_text"
                                style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">
                                Coupon</div>
                        </a>
                    </li> -->
                    <li class="load_more_options">
                        <a href="/qr-code-solutions">
                            <div class="nav_icon_img"><i class="fa fa-chevron-right"></i></div>
                            <div class="nav_text"
                                style="overflow: hidden;white-space:nowrap;max-width:110px;text-overflow: ellipsis;">
                                More</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>





<?php
include 'footer_1.php';
?>