// const menuIcon = document.getElementsByClassName('.dashicons');
// const navMenu = document.querySelector('.nav-links');
// // const navLinks = document.querySelectorAll('.navbar a');

// allEventListners();

// function allEventListners() {
//   console.log(menuIcon);
//   menuIcon[0].addEventListener('click', togglerClick);
// }

// function togglerClick() {
//   menuIcon.classList.toggle('toggler-open');
//   navMenu.classList.toggle('open');
// }

// function navLinkClick() {
//   if(navMenu.classList.contains('open')) {
//     navToggler.click();
//   }
// }


jQuery(document).ready(function ($) {

  $('.carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    dots: false,
    prevArrow:'<i class="fas fa-chevron-left slick-prev" type="button"></i>',
    nextArrow:'<i class="fas fa-chevron-right slick-next" type="button"></i>',
    // responsive: [
    //   {
    //     breakpoint: 900,
    //     settings: "unslick"
    //   }
    // ]
  });

  $(".dashicons").on("click", function () {
    this.classList.toggle("open");
    document.getElementsByClassName('nav-links')[0].classList.toggle("open");
  });


  // $(".menu-item-has-children").on("click", function () {
  //   var menu = this.querySelector('.sub-menu');
  //   var actives = document.querySelectorAll('.sub-active');
  //   console.log(actives);
  //   actives.forEach(el => {
  //     if (el !== menu) {
  //       el.classList.remove("sub-active");
  //     }
  //   });
  //   menu.classList.toggle("sub-active");
  // });
  // $("a[href='#'").on("click", function (e) {
  //   e.preventDefault();
  // });


  
});




	// $(".testimonial-container").slick({
  //       slidesToScroll: 1,
  //       autoplay: true,
  //       autoplaySpeed: 8000,
  //       arrows: true,
  //       dots: false,
  //       responsive: [{
  //           breakpoint: 800,
  //           settings: "unslick"
  //         },
  //       {
  //           breakpoint: 414,
  //           settings: "unslick"
  //       }], 
  //       prevArrow:'<i class="fas fa-chevron-left slick-prev" type="button"></i>',
  //       nextArrow:'<i class="fas fa-chevron-right slick-next" type="button"></i>'
  //   }); 