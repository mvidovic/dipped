<?php
    $title= "Blog";
    $cssFile= "blog.css";
    require_once ('../include/head.php');
?>
<section class="jumbotron">
    <div class="title-overlay-color">
        <div class="container">
            <?php require_once ('../include/navbar.php'); ?>
            <div class="jumbotron-fluid text-center">
                <h1 class="mt-5">Blog</h1>
                <h4 class="">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h4>
            </div><!-- end jumbotron  jumbotron-fluid-->      
        </div>
    </div> 
</section> <!-- end jumbotron -->

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
                <small class="label">
                    24.04.2018.
                    <span class="label-unit"><i class="material-icons" style="font-size:14px;">thumb_up_alt</i>1</span>
                </small>
                <h3>Tittle</h3>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
                </p>
                <button class="btn btn-outline-secondary btn-sm float-left">Learn More</button>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
            <small class="label">
                    20.07.2018.
                    <span class="label-unit"><i class="material-icons" style="font-size:14px;">thumb_up_alt</i>1</span>
                </small>
                <h3>Tittle</h3>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
                </p>
                <button class="btn btn-outline-secondary btn-sm float-left">Learn More</button>
            </div>
        </div>
    </div>
</section> <!-- end main -->

<?php 
    require_once ('../include/footer.php');
?>  