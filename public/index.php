<!DOCTYPE html>
<html lang="en">
<?php
include ("common/head.php");
?>

<body>
    <?php
    // include ("common/preloader.php");
    include ("common/navbar.php");
    ?>

    <!-- Hero Banner Start -->
    <section class="container-fluid my-4">
        <div class="container hero-container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <p class="lead m-0 animate__animated animate__fadeInUp animate__delay-4s">
                        Making Your Dreams Come True
                    </p>
                    <h1
                        class="hero-h1 text-primary display-4 mb-4 animate__animated animate__fadeInLeft animate__delay-3s">
                        Unlocking Potential Through Innovation
                    </h1>
                    <p class="mb-4 text-dark fs-5 animate__animated animate__fadeInDown animate__delay-4s">Discover how
                        we can help your brand thrive
                        with
                        our personalized approach and dedicated team.</p>
                    <div class="hero-btn-container">
                        <a href="" class="me-2">
                            <button type="button"
                                class="px-3 py-sm-3 px-sm-1 btn btn-primary hero-content-btn1 animate__animated animate__fadeInLeft animate__delay-4s">Explore
                                Our Story</button>
                        </a>
                        <a href="" class="ms-2">
                            <button type="button"
                                class="px-3 py-sm-3 px-sm-4 btn btn-primary hero-content-btn2 animate__animated animate__fadeInRight animate__delay-4s">Get
                                in Touch</button>
                        </a>
                    </div>
                </div>
                <div
                    class="col-md-6 d-flex justify-content-center align-items-center animate__animated animate__jackInTheBox animate__delay-3s">
                    <img src="assets/images/banner.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Banner End -->
    <?php
    include ("common/footer.php");
    include ("common/scripts.php");
    ?>
</body>

</html>