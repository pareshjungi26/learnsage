import 'jquery';
import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper/bundle';

/**
 * Application entrypoint
 */
domReady(async () => {
  jQuery('.menubtn').on('click', function($) {
    $('nav > ul').slideToggle().trigger('click');
  });
  
  function elisc_tm_cursor() {
    var myCursor = jQuery(".mouse-cursor");
    if (myCursor.length) {
      if (jQuery("body")) {
        const e = document.querySelector(".cursor-inner"),
          t = document.querySelector(".cursor-outer");
        let n,
          i = 0,
          o = !1;
        (window.onmousemove = function (s) {
          o ||
            (t.style.transform =
              "translate(" + s.clientX + "px, " + s.clientY + "px)"),
            (e.style.transform =
              "translate(" + s.clientX + "px, " + s.clientY + "px)"),
            (n = s.clientY),
            (i = s.clientX);
        }),
          jQuery("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
          }),
          jQuery("body").on("mouseleave", "a, .cursor-pointer", function ($) {
            (jQuery(this).is("a") && $(this).closest(".cursor-pointer").length) ||
              (e.classList.remove("cursor-hover"),
              t.classList.remove("cursor-hover"));
          }),
          (e.style.visibility = "visible"),
          (t.style.visibility = "visible");
      }
    }
  }
  elisc_tm_cursor();

  var swiper = new Swiper(".campsite_swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,

    loop:true,
    coverflowEffect: {
      rotate: 0,
      stretch: 100,
      depth: 200,
      modifier: 1,
      slideShadows: false,
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: "1",
      },
      769: {
        slidesPerView: "1.4",
      },
    }
  });

  var swiper = new Swiper(".explore-maui_swiper", {
    slidesPerView: 1,
    grabCursor: true,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

   // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    jQuery(".tab_content").hide();
    jQuery(".tab_content:first").show();

  /* if in tab mode */
    jQuery("ul.tabs li").click(function($) {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	jQuery(".tab_drawer_heading").click(function($) {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	jQuery('ul.tabs li').last().addClass("tab_last");
  // $(function () {
  //   $(".accordion-content:not(:first-of-type)").css("display", "none");

  //   $(".js-accordion-title:first-of-type").addClass("open");
   
  //   $(".js-accordion-title").click(function () {
  //     $(".open").not(this).removeClass("open").next().slideUp(300);
  //     $(this).toggleClass("open").next().slideToggle(300);
  //   });
  // });


      // Accordion Js
      jQuery(function ($) {
      if ($('.accordion-wrapper').length) {
        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                var links = this.el.find('.accordion-title');
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el;
                var $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
                };
            }
            var accordion = new Accordion($('.accordion-container'), false);
        });
        $(document).on('click', function (event) {
            if (!$(event.target).closest('#accordion').length) {
                $this.parent().toggleClass('open');
            }
        });
    }     
  });


  
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
