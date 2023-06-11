<!-- ================ Bootstrap ================ -->
<?php 
include_once '../bootstrap.php';
?>

<!-- ================ CSS FILE ================ -->
<style>
    <?php include 'placement.css' ?>;     
</style>

<!-- ================ Nav bar================ -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Placement Cell</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" id="placenav1">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" id="placenav2">Recruiters</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="placenav3">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="placenav4">Coordinators</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="placenav5">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="placenav6">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<!-- ================ header ================ -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.rgukt.ac.in/assets/images/rgukt/convocation.JPG" class="d-block w-100 carou-img-size" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.jnncollege.edu.in/wp-content/uploads/2019/03/placementcell.png" class="d-block w-100 carou-img-size" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://chec.ac.in/wp-content/uploads/2019/12/Placement.jpg" class="d-block w-100 carou-img-size" alt="...">
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
<!-- ================ overview ================ -->
<div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1 class="place-head">Overview</h1>
                <hr class="campus-life-line mb-3" />
            </div>
            <div class="col-12 d-flex flex-column justify-content-center mt-3">
                <p class="place-des">Our Placement Cell acts as a bridge for our students and recruiters. It monitors the employment opportunities in various domains and invites the recruiters for campus recruitment of final year students at our Institute. Students are enhanced with niche skills as expected by various industries. It is very successful in maintaining high and consistent placement statistics over the years. Every year, as a result of our students' stellar achievement in the workplace, we add more recruiters to our roster. The On-Campus recruitment program keeps continuing till the end of their final semester. We also support our students with Off Campus Recruitment.</p>
            </div>
            <div class="col-12 col-md-5 order-md-2 d-flex flex-row justify-content-center mb-4 mt-3">
                <img src="https://contentstatic.timesjobs.com/photo/66737138/trending/preparing-for-campus-placements-let-industry-experts-guide-you.jpg" class="place-img" />
            </div>
            <div class="col-12  col-md-7 order-md-1 d-flex flex-column justify-content-center">
                <div class="d-flex flex-row">
                    <ul class="place-obj">
                        <li class="place-des-obj">To inspire students and impart skills to meet the demands of business and corporate environments.</li>
                        <li class="place-des-obj">To assist students in selecting the right career.</li>
                        <li class="place-des-obj">The goal is to place the maximum number of students through excellent placement support by inviting eminent recruiters for our Campus Recruitment Program.</li>
                        <li class="place-des-obj">Build the interpersonal skills necessary to enable students to effectively collaborate with one another to meet organizational objectives.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- ================ count ================ -->
    <div class="place-highlights mt-5">
        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col-12 col-md-3 mb-3">
                    <div class="text-center">
                        <div class="d-flex flex-row justify-content-center">
                            <h1 class="place-high-head counterr">50</h1>
                            <h1 class="place-high-head">+</h1>
                        </div>

                        <p class="place-high-para">Total no.of Recruiters</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="text-center">
                        <div class="d-flex flex-row justify-content-center">
                            <h1 class="place-high-head counterr">30</h1>
                            <h1 class="place-high-head">+</h1>
                        </div>

                        <p class="place-high-para">Fortune 500 Companies</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="text-center">
                        <div class="d-flex flex-row justify-content-center">
                            <h1 class="place-high-head counterr">15</h1>
                            <h1 class="place-high-head ml-2"> LPA</h1>
                        </div>

                        <p class="place-high-para">Highest Package</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="text-center">
                        <div class="d-flex flex-row justify-content-center">
                            <h1 class="place-high-head counterr">50</h1>
                            <h1 class="place-high-head">+</h1>
                        </div>
                        <p class="place-high-para">MNC</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ================ recruiters  ================ -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="place-head text-center palce-main-head">Our Recruiters</h1>
                <hr class="campus-life-line mb-5" />
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
            <div class="col-12 mb-4 col-sm-6 col-md-3 col-lg-2">
                <div class="recru-card">
                    <img src="https://www.sharda.ac.in/attachments/testimonial_images/Manpower.png" class="w-100" />
                </div>
            </div>
        </div>
    </div>
<!-- ================ Testimonials ================ -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="place-head mb-5 text-center">Testimonials</h1>
                <div class="owl-carousel owl-theme place-carousall">
                    <div>
                        <div class="testi-card">
                            <div class="testi-image-cont">
                                <div class="testi-pic-cont">
                                </div>
                                <div class=" d-flex flex-row justify-content-center">
                                    <img src="administration/kc-reddy.jpg" alt="" class="testi-pic" />
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <h2 class="testi-des-head mt-2">Prof. K. C. Reddy</h2>
                                <p class="testi-des">Professor K.C.Reddy, a Doctorate in Economics; Taught
                                    Economics at Andhra University for over three decades...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-image-cont">
                                <div class="testi-pic-cont">
                                </div>
                                <div class=" d-flex flex-row justify-content-center">
                                    <img src="administration/kc-reddy.jpg" alt="" class="testi-pic" />
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <h2 class="testi-des-head mt-2">Prof. K. C. Reddy</h2>
                                <p class="testi-des">Professor K.C.Reddy, a Doctorate in Economics; Taught
                                    Economics at Andhra University for over three decades...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-image-cont">
                                <div class="testi-pic-cont">
                                </div>
                                <div class=" d-flex flex-row justify-content-center">
                                    <img src="administration/kc-reddy.jpg" alt="" class="testi-pic" />
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <h2 class="testi-des-head mt-2">Prof. K. C. Reddy</h2>
                                <p class="testi-des">Professor K.C.Reddy, a Doctorate in Economics; Taught
                                    Economics at Andhra University for over three decades...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-image-cont">
                                <div class="testi-pic-cont">
                                </div>
                                <div class=" d-flex flex-row justify-content-center">
                                    <img src="administration/kc-reddy.jpg" alt="" class="testi-pic" />
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <h2 class="testi-des-head mt-2">Prof. K. C. Reddy</h2>
                                <p class="testi-des">Professor K.C.Reddy, a Doctorate in Economics; Taught
                                    Economics at Andhra University for over three decades...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-image-cont">
                                <div class="testi-pic-cont">
                                </div>
                                <div class=" d-flex flex-row justify-content-center">
                                    <img src="administration/kc-reddy.jpg" alt="" class="testi-pic" />
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <h2 class="testi-des-head mt-2">Prof. K. C. Reddy</h2>
                                <p class="testi-des">Professor K.C.Reddy, a Doctorate in Economics; Taught
                                    Economics at Andhra University for over three decades...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-card">
                            <div class="testi-image-cont">
                                <div class="testi-pic-cont">
                                </div>
                                <div class=" d-flex flex-row justify-content-center">
                                    <img src="administration/kc-reddy.jpg" alt="" class="testi-pic" />
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <span class="fa fa-star testi-star"></span>
                                <h2 class="testi-des-head mt-2">Prof. K. C. Reddy</h2>
                                <p class="testi-des">Professor K.C.Reddy, a Doctorate in Economics; Taught
                                    Economics at Andhra University for over three decades...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- ================ js code================ -->
<script src="placement.js">
</script>
<script>
    $(document).ready(function(){
    $('.place-carousall').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        dots:false,
       autoplay:false,
        autoplayHoverPause:true,
        autoplayTimeout:2000,
        autoplaySpeed:2000,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    })

    });
</script>
<!-- ================ owl carousals and js ================ -->
<!-- ================ owl carousals and js ================ -->
<?php
include '../owlcarousalsjs.php';
?>
