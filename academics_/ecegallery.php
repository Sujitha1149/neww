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
    <?php include 'alldept.css' ?>;     
</style>

<!-- ================ Navbar ================ -->
<?php
include '../nav.php';
?>

<!-- ================ABOUT RGUKT ================ -->
<div class="vision-mission-bg">
        <h1 class="vision-mission-head">Electronics & Communication  Engineering</h1>
</div>
<div class="d-md-none">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Departments</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CSE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=csedept">About CSE</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=csefaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=cselab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=csegallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=cselecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=cseplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=csenotifications">Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ECE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=ecedept">About ECE</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=ecefaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=ecelab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=ecegallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=ecelecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eceplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=ecenotifications">Notifications</a>
                        </div>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EEE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=eeedept">About EEE</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eeefaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eeelab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eeegallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eeelecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eeeplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=eeenotifications">Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CIVIL
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=civildept">About CIVIL</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=civilfaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=civillab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=civilgallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=civillecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=civilplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=civilnotifications">Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MECH
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=mechdept">About MECH</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mechfaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mechlab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mechgallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mechlecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mechplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mechnotifications">Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MME
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=mmedept">About MME</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mmefaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mmelab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mmegallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mmelecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mmeplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=mmenotifications">Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CHEMICAL
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicaldept">About CHEMICAL</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicalfaculty">Faculty</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicallab">Laboratories</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicalgallery">Photo Gallery</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicallecture">Lecture Notes</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicalplacements">Placement Details</a>
                        <a class="dropdown-item" href="instituteinfo.php?data=chemicalnotifications">Notifications</a>
                        </div>
                    </li>
                    
        </ul>                    
        </div>
    </nav>          
</div>
<div class="container mb-5">
    <div class="row mt-5">
    <div class="col-12 col-md-3 d-none d-md-block">
        <nav class="sidebar card py-2 mb-4 side-bar-stick">
            <ul class="nav flex-column" id="nav_accordion">
                <li class="nav-item">
                    <p class="sidebar-head-text">Quick Links</p>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>CSE</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=csedept">About CSE</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=csefaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=cselab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=csegallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=cselecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=cseplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=csenotifications">Notifications</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>ECE</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=ecedept">About ECE</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=ecefaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=ecelab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=ecegallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=ecelecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eceplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=ecenotifications">Notifications</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>EEE</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=eeedept">About EEE</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eeefaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eeelab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eeegallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eeelecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eeeplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=eeenotifications">Notifications</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>CIVIL</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=civildept">About CIVIL</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=civilfaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=civillab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=civilgallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=civillecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=civilplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=civilnotifications">Notifications</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>MECH</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=mechdept">About MECH</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mechfaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mechlab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mechgallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mechlecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mechplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mechnotifications">Notifications</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>MME</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=mmedept">About MME</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mmefaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mmelab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mmegallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mmelecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mmeplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=mmenotifications">Notifications</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu sidebar-submenu-head">
                    <a class="nav-link sub-menu-item-link" href="#"> <span>CHEMICAL</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="submenu collapse">
                    <li><a class="nav-link" href="instituteinfo.php?data=chemicaldept">About CHEMICAL</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=chemicalfaculty">Faculty</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=chemicallab">Laboratories</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=chemicalgallery">Photo Gallery</a></li>
                        <li><a class="nav-link" href="instituteinfo.php?data=chemicallecture">Lecture Notes</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=chemicalplacements">Placement Details</a> </li>
                        <li><a class="nav-link" href="instituteinfo.php?data=chemicalnotifications">Notifications</a> </li>
                    </ul>
                </li>
                

            </ul>
        </nav>
    </div>
    <div class="col-12 col-md-9">
        <h1 class="chanc-about mb-4"> ECE Workshops</h1>
        <div class="faculty-cards-cont">
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
				<img src="photogal/workshop.jpeg" class="branch-gallery-img" />
					<div class="branch-gallery-content">
						<h1 class="branch-gallery-card-head text-center">Machine Learning</h1>
						<p class="branch-gallery-card-des">Workshop on Machine Learning for two days</p>
					</div>
			</div>  
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
                <img src="photogal/aca2.jpg" class="branch-gallery-img" />
				<div class="branch-gallery-content">
				    <h1 class="branch-gallery-card-head text-center">Java Programming</h1>
					<p class="branch-gallery-card-des">Two days cse workshop on java Programming</p>
				</div>
			</div>   
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
				<img src="photogal/aca3.jpg" class="branch-gallery-img" />
				<div class="branch-gallery-content">
					<h1 class="branch-gallery-card-head text-center">Internet of Things(IOT)</h1>
					<p class="branch-gallery-card-des">Two days cse workshop on iot and applications</p>
				</div>
			</div>               
        </div>
        <div class="faculty-cards-cont">
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
				<img src="photogal/aca4.jpg" class="branch-gallery-img" />
					<div class="branch-gallery-content">
						<h1 class="branch-gallery-card-head text-center">Machine Learning Workshop</h1>
						<p class="branch-gallery-card-des">Workshop on Machine learning</p>
					</div>
			</div>  
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
                <img src="photogal/lab4.jpg" class="branch-gallery-img" />
				<div class="branch-gallery-content">
				    <h1 class="branch-gallery-card-head text-center">Java Programming</h1>
					<p class="branch-gallery-card-des">Two days workshop on java programming</p>
				</div>
			</div>   
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
				<img src="photogal/aca6.jpg" class="branch-gallery-img" />
				<div class="branch-gallery-content">
					<h1 class="branch-gallery-card-head text-center">It Career Guidence</h1>
					<p class="branch-gallery-card-des">Two days cse workshop on career guidance</p>
				</div>
			</div>               
        </div>
        <h1 class="chanc-about mb-3 mt-3"> ECE Events</h1>
        <div class="faculty-cards-cont">
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
				<img src="photogal/lab3.jpg" class="branch-gallery-img" />
					<div class="branch-gallery-content">
						<h1 class="branch-gallery-card-head text-center">ECEISMIC</h1>
						<p class="branch-gallery-card-des">ECEISMIC event conducted on the occussion of Enigineers Day</p>
					</div>
			</div>  
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
                <img src="photogal/lab.jpg" class="branch-gallery-img" />
				<div class="branch-gallery-content">
				    <h1 class="branch-gallery-card-head text-center">Innovfest</h1>
					<p class="branch-gallery-card-des">Technical fest for Ece Department</p>
				</div>
			</div>   
            <div class="branch-gallery-card shadow-sm w-100 mt-3 mb-3">
				<img src="photogal/lab2.jpg" class="branch-gallery-img" />
				<div class="branch-gallery-content">
					<h1 class="branch-gallery-card-head text-center">Configure</h1>
					<p class="branch-gallery-card-des">Configure event Conducted for ECE DEpartment</p>
				</div>
			</div>               
        </div>
    </div>
    
</div>
<!-- ================ sidebar js file================ -->
<script>
    <?php include 'alldept.js' ?>;     
</script>
<!-- ================ footer ================ -->
<?php
include '../footer.php';
?>