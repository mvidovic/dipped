<?php
    $title= "Contact Us";
    $cssFile= "contactUs.css";
    require_once ('../include/head.php');
?>
<section class="jumbotron" id="contactBanner">
    <div class="title-overlay-color">
        <div class="container">
            <?php require_once ('../include/navbar.php'); ?>
            <div class="jumbotron-fluid text-center">
                <h1 class="mt-5">Contact Us</h1>
            </div><!-- end jumbotron  jumbotron-fluid-->
        </div>
    </div>
</section> <!-- end jumbotron -->

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                <h3 class="col-12">Any Questions?</h3>
                <p>If you have any questions feel free to contact us.</p>
                <br/>
                <p class="address">
                Address,<br/>
                11111 Example,<br/>
                Example</p>

                <p class="number"><i class="material-icons" style="font-size:24px;">phone_callback</i> Tel: +38111/135468543</p> 
                <p class="email"><i class="material-icons" style="font-size:24px;">mail</i> <a href="mailto:example@gmail.com">example@gmail.com</a></p>
            </div>

            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                <img src="../images/map.jpg" alt="" class="img-fluid float-right" >
            </div>
        </div><!--end row -->
    </div>
</section><!--end main -->

<?php 
    require_once ('../include/footer.php');
?>
