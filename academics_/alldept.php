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
        <h1 class="vision-mission-head">All Departments</h1>
</div>
    <div class="container mb-5">
        <div class="row">
            <div class="site-heading col-12 mt-5 mb-4">
                <h4 class="text-center">Departments <span>of Engineering</span> </h4>
                <hr class="dept-hor-line mb-4"/>
                <p>Engineering is the use of scientific principles to design and build machines, structures, and other items, including bridges, tunnels, roads, vehicles, and buildings. The discipline of engineering encompasses a broad range of more specialized fields of engineering, each with a more specific emphasis on particular areas of applied mathematics, applied science, and types of application. See glossary of engineering.</p>
            </div>
            <div class="col-12 mt-3 mb-4 col-md-4">

                <div class="photo-gallery-card shadow">
                    <img src="images/cse.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Computer Science Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More" onclick="location.href='instituteinfo.php?data=csedept'">

            </div>
            <div class="col-12 mt-3 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/ece.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Electrical and Communications Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More" onclick="location.href='instituteinfo.php?data=ecedept'">

            </div>
            <div class="col-12 mt-3 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/civil.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Civil Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More" onclick="location.href='instituteinfo.php?data=civildept'">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/eee.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center ">Electrical & Electronical Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More" onclick="location.href='instituteinfo.php?data=eeedept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/mechanical.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Mechanical Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More"
                    onclick="location.href='instituteinfo.php?data=mechdept'">

            </div>


            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/chemical.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Chemical Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More"
                    onclick="location.href='instituteinfo.php?data=chemicaldept'">
            </div>
            <div class="col-12 mt-3 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/mme.jpeg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Metullurgcal & Materials Engineering</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="View More" onclick="location.href='instituteinfo.php?data=mmedept'">
            </div>
        </div>


        <!--Humanities-->
        <div class="site-heading col-12 mt-4">
            <h4 class=" mt-4 text-center">Department <span>of Humanities</span> </h4>
            <hr class="dept-hor-line mb-4"/>
            <p>Humanities is an academic subject that deals with the study of the Human Condition, ‌using analytical, critical, or speculative techniques.
                Humanities subjects are a broad area of study with a plethora of incredibly intriguing and always growing employment opportunities. Given that the practical implementation of these subjects will always be preferred in every industry, these humanities subjects are popular among students.</p>
        </div>
        <div class="row">


            <div class="col-12 mt-4 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/english.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">English</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="English Faculty"
                    onclick="location.href='instituteinfo.php?data=englishdept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/telugu.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Telugu</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="Telugu Faculty" onclick="location.href='instituteinfo.php?data=telugudept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/finearts.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Fine Arts</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="Fine-arts Faculty" onclick="location.href='instituteinfo.php?data=fineartsdept'">

            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/library.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Library</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="Library Faculty"
                    onclick="location.href='instituteinfo.php?data=librarydept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/yoga.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Physical Education & Yoga</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="PET-Yoga Faculty" onclick="location.href='instituteinfo.php?data=pyogadept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-4">
                <div class="photo-gallery-card shadow">
                    <img src="images/management1.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Management</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="ManagementFaculty"
                    onclick="location.href='instituteinfo.php?data=managementdept'">

            </div>
        </div>

        <!--Sciences-->
        <div class="site-heading col-12 mt-2 mb-5">
            <h4 class=" mt-4 text-center">Department <span>of Sciences</span> </h4>
            <hr class="dept-hor-line mb-4"/>
            <p>science, any system of knowledge that is concerned with the physical world and its phenomena and that entails unbiased observations and systematic experimentation. In general, a science involves a pursuit of knowledge covering general truths or the operations of fundamental laws.
                Science can be divided into different branches based on the subject of study. The physical sciences study the inorganic world and comprise the fields of astronomy, physics, chemistry, and the Earth sciences. The biological sciences such as biology and medicine study the organic world of life and its processes. Social sciences like anthropology and economics study the social and cultural aspects of human behaviour.</p>
        </div>


        <div class="row mt-3">

            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/chemistry.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Chemistry</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="Chemistry Faculty"
                    onclick="location.href='instituteinfo.php?data=chemistrydept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/physics.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Physics</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="Physics Faculty"
                    onclick="location.href='instituteinfo.php?data=physicsdept'">

            </div>
            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/it.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Information Technologies</h1>
                    </div>
                </div>
                <input type="button" class="event-button" value="IT Faculty" onclick="location.href='instituteinfo.php?data=itdept'">

            </div>

            <div class="col-12 mt-4 mb-4 col-md-3">
                <div class="photo-gallery-card shadow">
                    <img src="images/maths.jpg" class="photo-gallery-img" />
                    <div class="photo-gallery-content">
                        <h1 class="photo-gallery-card-head text-center">Mathematics</h1>
                    </div>

                </div>
                <input type="button" class="event-button" value="Maths Faculty" onclick="location.href='instituteinfo.php?data=mathsdept'">

            </div>



        </div>
    </div>
<!-- ================ footer ================ -->
<?php
include '../footer.php';
?>