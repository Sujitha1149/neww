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
        <h1 class="vision-mission-head">Academic Calender</h1>
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
            <h1 class="chanc-about mb-3">Academic Calender</h1>
            <hr/>
            <p class="chanc-pro-des mb-2"> <i class="fa fa-calendar"></i> ACADEMIC CALENDAR FOR YEAR 2021-2022 </p>
            <object data="myfile.pdf" type="application/pdf" width="100%" height="100%">
                <p class="chanc-pro-des"> <a href="pdf/abstract(mini-project).pdf"> <i class="fa fa-arrow-right mr-2" aria-hidden="true" ></i>
                Semister 1</a></p>
            </object>
            <object data="myfile.pdf" type="application/pdf" width="100%" height="100%">
                <p class="chanc-pro-des"> <a href="pdf/abstract(mini-project).pdf"> <i class="fa fa-arrow-right mr-2" aria-hidden="true" ></i>
                Semister 1</a></p>
            </object>
            <hr/>
            <p class="chanc-pro-des mb-2"> <i class="fa fa-calendar"></i> ACADEMIC CALENDAR FOR YEAR 2021-2022 </p>
            <object data="myfile.pdf" type="application/pdf" width="100%" height="100%">
                <p class="chanc-pro-des"> <a href="pdf/abstract(mini-project).pdf"> <i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Semister 1</a></p>
            </object>
            <object data="myfile.pdf" type="application/pdf" width="100%" height="100%">
                <p class="chanc-pro-des"> <a href="pdf/abstract(mini-project).pdf"> <i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Semister 1</a></p>
            </object>
            <hr/>
        </div>
    </div>
</div>
<!-- ================ footer ================ -->
<?php
include '../footer.php';
?>