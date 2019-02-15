<?php
    $title= "Home";
    $cssFile= "home.css";
    require_once ('../include/head.php');
    
?>
<section class="jumbotron">
    <div class="container">
        <?php require_once ('../include/navbar.php'); ?>
        <div class="jumbotron-fluid text-center">
            <h1 class="mt-5">We build well designed websites</h1>
            <h4 class="">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h4>

            <button type="button" class="btn btn-primary">Get Started!</button>
            <a href="../services/services.php">Learn More</a>
            <img src="../images/browser.png" alt="" />
        </div><!-- end jumbotron  jumbotron-fluid-->
    </div>
</section> <!-- end jumbotron -->

    <section id="process">
        <div class="container">
            <div class="row">
                <div class="h-line d-none d-lg-block d-xl-none d-none d-xl-block">&nbsp</div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="plan text-center">
                        <span class="process-icon iplan">&nbsp</span>
                        <h4 class="my-0 font-weight-normal mb-3">Plan</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                        <button type="button" class="btn process-btn">Read More</button>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="design text-center">
                        <span class="process-icon idesign">&nbsp</span>
                        <h4 class="my-0 font-weight-normal mb-3">Design</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                        <button type="button" class="btn process-btn">Read More</button>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="develop text-center">
                        <span class="process-icon idevelop">&nbsp</span>
                        <h4 class="my-0 font-weight-normal mb-3">Develop</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                        <button type="button" class="btn process-btn">Read More</button>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="launch text-center">
                        <span class="process-icon ilaunch">&nbsp</span>
                        <h4 class="my-0 font-weight-normal mb-3">Launch</h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                        <button type="button" class="btn process-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end process -->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 portfolio-item">
                    <h4>Portfolio</h4>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    <a href="#">Our Portfolio</a>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 portfolio-item">
                    <div class="text-center">
                        <img src="../images/thumbnail/thumb-1.png" alt="" class="img-thumbnail">
                        <h5>1stwebdesigner</h5>
                        <p><small>Web Design</small></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 portfolio-item">
                    <div class="text-center">
                        <img src="../images/thumbnail/thumb-2.png" alt="" class="img-thumbnail">
                        <h5>Arvie</h5>
                        <p><small>Web Design</small></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 portfolio-item">
                    <div class="text-center">
                        <img src="../images/thumbnail/thumb-3.png" alt="" class="img-thumbnail">
                        <h5>LabZip</h5>
                        <p><small>Logo Design</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end portfolio -->

    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                    <img src="../images/thumbnail/partner-1.png" alt="" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                    <img src="../images/thumbnail/partner-2.png" alt="" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                    <img src="../images/thumbnail/partner-3.png" alt="" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                    <img src="../images/thumbnail/partner-4.png" alt="" >
                </div>
            </div>
        </div>
    </section><!-- end partners -->

    <section id="widgets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="testimonials">
                        <h4>Testimonials</h4>
                        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../images/thumbnail/small-thumb-1.png" class="float-left carousel-thumbnail-img" alt="...">
                                    <blockquote>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                        <cite>
                                            <strong>9Gag</strong> <br>
                                            <a href="#">www.9gag.com</a>
                                        </cite>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/thumbnail/small-thumb-1.png" class=" float-left za\zasssssssssssssssssssssssszcarousel-thumbnail-img" alt="...">
                                    <blockquote>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                        <cite>
                                            <strong>9Gag</strong> <br>
                                            <a href="#">www.9gag.com</a>
                                        </cite>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/thumbnail/small-thumb-1.png" class="float-left carousel-thumbnail-img" alt="...">
                                    <blockquote>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                        <cite>
                                            <strong>9Gag</strong> <br>
                                            <a href="#">www.9gag.com</a>
                                        </cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end testimonials -->

                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="blog">
                        <h4>Our Latest Posts</h4>
                        <ul class="blog-lists">
                            <li>
                                <h5><a href="#">This is Photoshop's version of Lorem Ipsum</a></h5>
                                <p><small>June 4, 2013 | Posted by <a href="#">Admin</a></small></p>
                            </li>
                            <li>
                                <h5><a href="#">This is Photoshop's version of Lorem Ipsum</a></h5>
                                <p><small>June 4, 2013 | Posted by <a href="#">Admin</a></small></p>
                            </li>
                            <li>
                                <h5><a href="#">This is Photoshop's version of Lorem Ipsum</a></h5>
                                <p><small>June 4, 2013 | Posted by <a href="#">Admin</a></small></p>
                            </li>
                        </ul>
                    </div><!-- end blog -->
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="tweets">
                        <h4>Latest Tweets</h4>
                        <ul class="tweet-lists">
                            <li>
                                <img src="../images/thumbnail/small-thumb-1.png" alt="" class="float-left">
                                <p>Proin gravida nibh vel velit auctor aliquet.
                                    <a href="#">http://on.dummy.me.10kvwek</a>
                                </p>
                            </li>
                            <li>
                                <img src="../images/thumbnail/small-thumb-1.png" alt="" class="float-left">
                                <p>Proin gravida nibh vel velit auctor aliquet.
                                    <a href="#">http://on.dummy.me.10kvwek</a>
                                </p>
                            </li>
                            <li>
                                <img src="../images/thumbnail/small-thumb-1.png" alt="" class="float-left">
                                <p>Proin gravida nibh vel velit auctor aliquet.
                                    <a href="#">http://on.dummy.me.10kvwek</a>
                                </p>

                            </li>
                        </ul>
                    </div><!-- end tweets -->
                </div>
            </div>
        </div>
    </section><!-- end widgets -->
    <?php 
        require_once ('../include/footer.php');
    ?>
    
    <script>
        $(function(){

            $('#testimonialCarousel').carousel()
        });
    </script>
