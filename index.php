<?php
include 'header_1.php';
?>

<!-- before login index page -->
<?php

if (!isset($_SESSION['id'])) {


    echo '<section>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner slide-back">
        <div class="carousel-item active">
            <img src="images/slider/slider1.png" alt="" srcset="">

            
        </div>
        <div class="carousel-item">
            <img src="images/slider/slider2.png" alt="" srcset="">

            
        </div>
        <div class="carousel-item">
            <img src="images/slider/slider3.png" alt="" srcset="">


            
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

</section>';

} else {
    echo '<section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner slide-back">
            <div class="carousel-item active">
                <img src="images/slider/slider1.png" alt="" srcset="">
    
                <div class="container-fluid ">
                    <div class="carousel-caption text-start  text-dark slide-back">
                        <h1>DIGITAL BUSINESS CARD </h1>
                        <p>A digital business card, often known as a digital card, is a modern approach to
                            sharing your
                            professional identity. Its a virtual representation of your contact information, including your
                            name, job title, company details, and various ways to reach you – all conveniently accessible on
                            a smartphone or computer.</p>
                        <p><a class="btn btn-lg btn-primary" href="pages/card-digi.php">Create Digital card</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider/slider2.png" alt="" srcset="">
    
                <div class="container-fluid">
                    <div class="carousel-caption slide-back text-dark">
                        <h1>File Converter </h1>
                        <p>A file converter is a digital tool designed to effortlessly convert one file format into another.
                            Whether its converting documents, images, audio, or video, this versatile utility empowers you
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
                            more. Whether youre sending files via email, storing data on the cloud, or simply organizing
                            your digital life, this tool lets you do it with ease</p>
    
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
    
    </section>
    
';
}



?>
<?php
include 'footer_1.php';
?>