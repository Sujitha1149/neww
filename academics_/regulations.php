<!-- ================ Bootstrap ================ -->
<?php 
include_once '../bootstrap.php';
?>
<!-- ================ Navbar style ================ -->
<style>
    <?php include '../style.css' ?>;     
</style>
<!-- ================ CSS FILE ================ -->
<style>
    <?php include 'academics.css' ?>;     
</style>

<!-- ================ Navbar ================ -->
<?php
include '../nav.php';
?>

<!-- ================ABOUT RGUKT ================ -->
<div class="vision-mission-bg">
        <h1 class="vision-mission-head">Academic Regulations</h1>
</div>
<div class="container">
    <div class="row mb-5">
        <div class="col-12 col-md-3 mt-5 d-none d-md-block">
                <ul class="side-bar-quick">
                    <li class="vision-links-head">Quick Links</li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=chancellor" class="nav-list-sty">Chancellor</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=VC" class="nav-list-sty">Vice Chancellor</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=director" class="nav-list-sty">Director</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=AO" class="nav-list-sty">Administrative Officer</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=DSW" class="nav-list-sty">Dean Student Welfare</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=FO" class="nav-list-sty">Finance Officer</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=COE" class="nav-list-sty">Controller of Examinations</a></li>
                    <hr class="quick-links-line" />
                    <li class="menu-item-quick"><a href="instituteinfo.php?data=coordinators" class="nav-list-sty">Coordinators</a></li>
                </ul>
        </div>
        <div class="col-12 col-md-9 mt-5">
            <h1 class="chanc-about mb-3">Academic Regulations</h1>
            <hr/>
            <object data="myfile.pdf" type="application/pdf" width="100%" height="100%">
                <p class="chanc-pro-des"> <a href="academics_/Academicregulations.pdf"> <i class="fa fa-arrow-right mr-2" aria-hidden="true" ></i>
                Academic Rules and Regulations for 6 year integrated B.Tech. programme</a></p>
            </object>
            <hr/>
        </div>
    </div>
</div>
<!-- ================ footer ================ -->
<?php
include '../footer.php';
?>