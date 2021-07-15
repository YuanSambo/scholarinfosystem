<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<?= $this->include('components/navbar') ?>

<!--image slideeer -->
<section class="page-section mt-3" id="services">
    <div class="container imgslider-custom" style="padding-left: 10%; padding-right: 10%; margin-top: 5%;">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">

                <!--indicator-->
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>

            <!--pics-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="rounded d-block w-100 img-height" src="images/wcc.png" style="height:400px;">
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100 img-height" src="images/1.jpg" style="height:400px;">
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100 img-height" src="images/2.2.jpg" style="height:400px;">
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100 img-height" src="images/3.3.jpg" style="height:400px;">
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100 img-height" src="images/4.4.jpg" style="height:400px;">
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100 img-height" src="images/5.5.jpg" style="height:400px;">
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100 img-height" src="images/6.6.jpg" style="height:400px;">
                </div>



            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<!--socialmedia icons-->
<div class="d-flex justify-content-center mt-1">
    <h5 style="margin-top: 2%;">FOR INQUIRIES AND UPDATES</h5>
</div>
<footer class="footer py-4">
    <div class="container" style="padding-right: 45%;">
        <div class="d-flex justify-content-center">
            <div class="social-menu">
                <ul>
                    <li><a href="https://www.facebook.com/batspio" target="_blank"><i class="fab fa-facebook-square"></i></i></a></li>
                    <li><a href="https://twitter.com/batspiocapitol" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/batspiocapitol/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<?= $this->endSection() ?>
