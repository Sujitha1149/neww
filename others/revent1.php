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
    <?php include 'other.css' ?>;     
</style>

<!-- ================ Navbar ================ -->
<?php
include '../nav/nav.php';
?>

<!-- ================ABOUT RGUKT ================ -->
<div class="vision-mission-bg">
        <h1 class="vision-mission-head">Events-1</h1>
</div>
<div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="sub-eve-container">
                    <div class="mb-4">
                        <img src="events/st.jpg" class="reve-img" />
                    </div>
                    <div class="sub-even-text-cont">
                        <p class="sub-even-date">SEP 29 - SEP 30</p>
                        <h1 class="reve-cont-head mb-3">HANDS ON TRAINING FOR SOFTWARE SKILL DEVELOPMENT</h1>
                        <div class="d-flex flex-row justify-content-start">
                            <i class="fa-regular fa-clock subeve-icon"></i>
                            <p class="ml-3 subeve-icon-text">29 Sep 2022</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                            <i class="fa-solid fa-building-columns subeve-icon"></i>
                            <p class="ml-3 subeve-icon-text">RGUKT Ongole</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="subeve-icon-text">High Resolution Melting (HRM) is a homogeneous, highly powerful method for SNP genotyping, mutation scanning and sequence scanning in DNA samples. The HRM technology characterizes nucleic acid samples based on their disassociation behavior and dete</p>
                <input type=button onClick="location.href='instituteinfo.php?data=rguktE'"value='View All' class="adminis-cont-btn">
            </div>
        </div>
    </div>
<!-- ================ footer ================ -->
<?php
include '../footer/footer.php';
?>