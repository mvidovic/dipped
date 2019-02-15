<?php
    $title= "Services";
    $cssFile= "services.css";
    require_once ('../include/head.php');
?>


<section class="jumbotron" id="servicesBanner">
    <div class="title-overlay-color">
        <div class="container">
            <?php require_once ('../include/navbar.php'); ?>
            <div class="jumbotron-fluid text-center">
                <h1 class="mt-5">Services</h1>
                <h4 class="">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h4>
            </div><!-- end jumbotron  jumbotron-fluid-->
        </div>
    </div>
</section> <!-- end jumbotron -->

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="service">
                    <i class="material-icons float-left" style="font-size:48px;">computer</i>
                    <div class="service-text">
                        <h4>Web Design</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="service">
                    <i class="material-icons float-left" style="font-size:48px;">shopping_cart</i>
                    <div class="service-text">
                        <h4>Web Shop</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="service">
                    <i class="material-icons float-left" style="font-size:48px;">find_in_page</i>
                    <div class="service-text">
                        <h4>SEO</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="service">
                    <i class="material-icons float-left" style="font-size:48px;">pages</i>
                    <div class="service-text">
                        <h4>Copywriting</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. This is Photoshop's version of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end services -->

<section>
    <div class="container text-center" id="solo-banner">
        <img src="../images/services/solo-banner.jpg" alt="">
    </div>
</section> <!-- end solo-banner -->

<section class="counter">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center">
                <i class="material-icons col-12" style="font-size:50px;">mood</i>
                <strong>
                    <span class="count">100</span>+
                </strong>
                <div class="count-description col-12">Satisfied Customers</div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center" style="color:#fb2f3a;">
                <i class="material-icons col-12" style="font-size:50px;">free_breakfast</i>
                <strong>
                    <span class="count">500</span>+
                </strong>
                <div class="count-description col-12">Cups Of Coffee</div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center">
                <i class="material-icons col-12" style="font-size:50px;">grade</i>
                <strong>
                    <span class="count">200</span>+
                </strong>
                <div class="count-description col-12">Awards Won</div>
            </div>
        </div>
    </div>
</section> <!-- end counter -->

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 ">
                <h3>Class aptent taciti?</h3>
                <h5>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h5>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <button class="btn btn-outline-light btn-lg float-right">Contact Us</button>
            </div>
        </div>
    </div>
</section> <!-- end contact -->

<?php 
    require_once ('../include/footer.php');
?> 

<script>
    $('.count').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 1000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});
</script>