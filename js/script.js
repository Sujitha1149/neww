
/* ====
navbar
=====*/
(() =>{
 
  const openNavMenu = document.querySelector(".open-nav-menu"),
  closeNavMenu = document.querySelector(".close-nav-menu"),
  navMenu = document.querySelector(".nav-menu"),
  menuOverlay = document.querySelector(".menu-overlay"),
  mediaSize = 991;

  openNavMenu.addEventListener("click", toggleNav);
  closeNavMenu.addEventListener("click", toggleNav);
  // close the navMenu by clicking outside
  menuOverlay.addEventListener("click", toggleNav);

  function toggleNav() {
  	navMenu.classList.toggle("open");
  	menuOverlay.classList.toggle("active");
  	document.body.classList.toggle("hidden-scrolling");
  }

  navMenu.addEventListener("click", (event) =>{
      if(event.target.hasAttribute("data-toggle") && 
      	window.innerWidth <= mediaSize){
      	// prevent default anchor click behavior
      	event.preventDefault();
      	const menuItemHasChildren = event.target.parentElement;
        // if menuItemHasChildren is already expanded, collapse it
        if(menuItemHasChildren.classList.contains("active")){
        	collapseSubMenu();
        }
        else{
          // collapse existing expanded menuItemHasChildren
          if(navMenu.querySelector(".menu-item-has-children.active")){
        	collapseSubMenu();
          }
          // expand new menuItemHasChildren
          menuItemHasChildren.classList.add("active");
          const subMenu = menuItemHasChildren.querySelector(".sub-menu");
          subMenu.style.maxHeight = subMenu.scrollHeight + "px";
        }
      }
  });
  function collapseSubMenu(){
  	navMenu.querySelector(".menu-item-has-children.active .sub-menu")
  	.removeAttribute("style");
  	navMenu.querySelector(".menu-item-has-children.active")
  	.classList.remove("active");
  }
  function resizeFix(){
  	 // if navMenu is open ,close it
  	 if(navMenu.classList.contains("open")){
  	 	toggleNav();
  	 }
  	 // if menuItemHasChildren is expanded , collapse it
  	 if(navMenu.querySelector(".menu-item-has-children.active")){
        	collapseSubMenu();
     }
  }

  window.addEventListener("resize", function(){
     if(this.innerWidth > mediaSize){
     	resizeFix();
     }
  });

})();

/*====
upcoming events owl carousal
====*/
$(document).ready(function(){
  $('.upcoming-events-carousal').owlCarousel({
      loop:true,
      margin:14,
      nav:false,
      dots:false,
     autoplay:true,
      autoplayHoverPause:true,
      autoplayTimeout:2000,
      autoplaySpeed:2000,
      responsive:{
          0:{
              items:2
          },
          576:{
              items:2
          },
          768:{
              items:2
          },
          992:{
              items:2
          },
          1200:{
              items:2
          }
      }
  })

});

/*====
latest news
====*/
$(document).ready(function() {
    // Calling easyTicker function to
    // create newsticker movement
    $('.news-updates-card').easyTicker({
        direction: 'up',
        easing: 'swing',
        visible: 3,
        mousePause: true,
        speed: 'slow',
        interval: 1500,
        autoplay:true,
        height: 'auto',
        controls: {
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false
        }
    });
  });
  //=======tenders=======
  $(document).ready(function() {
    $('.tenders-card').easyTicker({
        direction: 'up',
        easing: 'swing',
        visible: 4,
        mousePause: true,
        speed: 'slow',
        interval: 1000,
        autoplay:true,
        height: 'auto',
        controls: {
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false
        }
    });
  });
function latestNews(){
    document.getElementById("newsUpdatesCard").style.display="block";
    document.getElementById("tendersCard").style.display="none";
    document.getElementById("latestNewsHead").style.backgroundColor="#454444";
    document.getElementById("tendersHead").style.backgroundColor="#ab0257";
}
function tendersHead(){
    document.getElementById("newsUpdatesCard").style.display="none";
    document.getElementById("tendersCard").style.display="block";
    document.getElementById("latestNewsHead").style.backgroundColor="#ab0257";
    document.getElementById("tendersHead").style.backgroundColor="#454444";
}
/*====
counter
====*/
$(document).ready(function() {

  var counters = $(".counterr");
  var countersQuantity = counters.length;
  var counter = [];

  for (let i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
      var localStart = start;
      setInterval(function() {
          if (localStart < value) {
              localStart++;
              counters[id].innerHTML = localStart;
          }
      }, 40);
  };

  for (let j = 0; j < countersQuantity; j++) {
      count(0, counter[j], j);
  }
});

/*====
recruiters
====*/
$(document).ready(function(){
    $('.recruiters-carousall').owlCarousel({
        loop:true,
        margin:40,
        nav:false,
        dots:false,
       autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:2000,
        autoplaySpeed:2000,
        responsive:{
            0:{
                items:2
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:5
            }
        }
    })

});
/*====
Placement cell testimonials
====*/

