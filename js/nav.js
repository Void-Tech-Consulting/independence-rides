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
  // hello team!!
  //   $('.carousel').slick({
  //     // prev arrow

  //     prevArrow:"<img class='a-left control-c prev slick-prev' src='../images/arrow-left.png'>",
  //       nextArrow:"<img class='a-right control-c next slick-next' src='../images/arrow-right.png'>"

  // // prevArrow:'<span class="dashicons dashicons-arrow-left-alt2"></span>',
  // // // next arrow

  // // nextArrow:'<span class="dashicons dashicons-arrow-right-alt2"></span>',
  //   });
  $('.carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    dots: false,
    prevArrow:'<i class="fas fa-chevron-left slick-prev" type="button"></i>',
    nextArrow:'<i class="fas fa-chevron-right slick-next" type="button"></i>',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

  $(".dashicons").on("click", function () {
    this.classList.toggle("open");
    document.getElementsByClassName('nav-links')[0].classList.toggle("open");
  });


  $(".menu-item-has-children").on("click", function () {
    var menu = this.querySelector('.sub-menu');
    var actives = document.querySelectorAll('.sub-active');
    console.log(actives);
    actives.forEach(el => {
      if (el !== menu) {
        el.classList.remove("sub-active");
      }
    });
    menu.classList.toggle("sub-active");
  });
  $("a[href='#'").on("click", function (e) {
    e.preventDefault();
  });
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