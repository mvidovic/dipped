<?php
    $title= "About Us";
    $cssFile= "aboutUs.css";
    require_once ('../include/head.php');
    require_once ('./modal.php');
?>

<section class="jumbotron" id="aboutUsBanner">
    <div class="title-overlay-color">
        <div class="container">
            <?php require_once ('../include/navbar.php'); ?>
            <div class="jumbotron-fluid text-center">
                <h1 class="mt-5">About Us</h1>
                <h4 class="">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h4>
            </div><!-- end jumbotron  jumbotron-fluid-->   
        </div>
    </div> 
</section> <!-- end jumbotron -->

<section id="aboutUsText">
    <div class="container">
        <div class="row text-center">
            <div class="col-12" id="text-column">
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                </p>
                <div class="popup-wrapper text-center">
                    <img src="../images/aboutUs/video-thumb.jpg" alt="" id="video-thumb">
        
                    <a class="popup video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/157070356?badge=0" data-target="#myModal">
                        <img src="../images/aboutUs/playButton.png" alt="">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section> <!-- end aboutUsText -->

<section class="ourTeam" id="accordion">
    <div class="container">
        <div class="row text-center">
            <h2 class="col-12">Our team</h2>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="team-member">
                    <div class="team-thumb">
                        <img src="../images/aboutUs/team-member-1.jpg" alt="">
                        <div class="member-info text-center">
                            <h3><a class="member-name" href="#">John Doe</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="team-member">
                    <div class="team-thumb">
                        <img src="../images/aboutUs/team-member-2.jpg" alt="">
                        <div class="member-info text-center">
                            <h3><a class="member-name" href="#">Jo Doe</a></h3>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="team-member">
                    <div class="team-thumb">
                        <img src="../images/aboutUs/team-member-1.jpg" alt="">
                        <div class="member-info text-center">
                            <h3><a class="member-name" href="#">John Doe</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                <div class="team-member">
                    <div class="team-thumb">
                        <img src="../images/aboutUs/team-member-2.jpg" alt="">
                        <div class="member-info text-center">
                            <h3><a class="member-name" href="#">Jo Doe</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end ourTeam -->

<section id="info">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2 class="info-heading">Our Creative Skills</h2>
                <div class="single-bar">
                    <small class="label">
                        Print Design
                        <span class="label-unit">80%</span>
                    </small>
                    <div>
                    <span class="progress-bar" style="width: 80%;"></span>
                    </div>
                </div>
                <div class="single-bar">
                    <small class="label">
                        Web Design
                        <span class="label-unit">90%</span>
                    </small>
                    <div>
                    <span class="progress-bar" style="width: 90%;"></span>
                    </div>
                </div>
                <div class="single-bar">
                    <small class="label">
                        Web Development
                        <span class="label-unit">85%</span>
                    </small>
                    <div>
                    <span class="progress-bar" style="width: 85%;"></span>
                    </div>
                </div>
                <div class="single-bar">
                    <small class="label">
                        Creativity level
                        <span class="label-unit">90%</span>
                    </small>
                    <div>
                    <span class="progress-bar" style="width: 90%;"></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h2 class="info-heading">FAQ</h2>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2 class="mb-0">
                                <button class="btn btn-link heading" id="heading-one" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Who We Are
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed heading" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What We Do
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed heading" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Why Choose Us
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end info -->

<?php 
    require_once ('../include/footer.php');
?>  

<script>
    $(document).ready(function() {

// Gets the video src from the data-src on each button

        var $videoSrc;  
        $('.video-btn').click(function() {
            $videoSrc = $(this).data( "src" );
        });
        console.log($videoSrc);
        // when the modal is opened autoplay it  
        $('#myModal').on('shown.bs.modal', function (e) {
    
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
    });
   
    // stop playing the video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    });



        // document ready  
    });



</script>

 