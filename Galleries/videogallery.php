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
    <?php include 'videogallery.css' ?>;     
</style>

<!-- ================ Navbar ================ -->
<?php
include '../nav/nav.php';
?>

<!-- ================ABOUT RGUKT ================ -->

<div class="container pt-5 pb-5">
    <div class="row">
    <div class="col-12">
    <div class="content">
        <h1 class="section-header">Video Gallery</h1>
        <div class="section-header-underline"></div>
        <div class="video-gallery">
          <div class="gallery-item">
            <img src="photogal/campus.jpeg" alt="North Cascades National Park" />
            <div class="gallery-item-caption">
              <div>
                <h4>Campus Tour</h4>
                <p>IIIT Ongole Campus View</p>
              </div>
              <a class="vimeo-popup" href="https://www.youtube.com/watch?v=7p4pjj4wFd0"></a>
            </div>
          </div>
      
          <div class="gallery-item ">
            <img src="photogal/india.jpeg" alt="Mt. Rainier" />
            <div class="gallery-item-caption">
              <div>
                <h4>Independence Day Celebration</h4>
                <p>Har Ghar Tirange ,IIIT ongole</p>
              </div>
              <a class="vimeo-popup" href="https://www.youtube.com/watch?v=8TngUe_hDWQ"></a>
            </div>
          </div>
      
          <div class="gallery-item mb-5">
            <img src="photogal/ornate.jpeg" alt="Olympic National Park" />
            <div class="gallery-item-caption">
              <div>
                <h4>Fest Celebration</h4>
                <p>Ornate 2K22,iiit Ongole</p>
              </div>
              <a class="vimeo-popup" href="https://youtu.be/-_pT-tO9LJc"></a>
            </div>
          </div>
      
          <div class="gallery-item mb-5">
            <img src="photogal/ong4.jpeg" alt="Mount St. Helens" />
            <div class="gallery-item-caption">
              <div>
                <h4>ongole campus view</h4>
                <p>Rgukt iiit ongole campus view</p>
              </div>
              <a class="vimeo-popup" href="https://www.youtube.com/watch?v=2MJwer8SSPQ"></a>
            </div>
          </div>
      
        </div>
      </div>
		
    </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('.video-gallery').magnificPopup({
    delegate: 'a', 
    type: 'iframe',
    gallery:{
      enabled:true
    }
  });
  });
</script>
<!-- ================ footer ================ -->
<?php
include '../footer/footer.php';
?>