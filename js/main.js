$(function(){
  "use strict";
  
  var options = [];
  
  $( '.dropdown-menu a' ).on( 'click', function( event ) {
  
     var $target = $( event.currentTarget ),
         val = $target.attr( 'data-value' ),
         $inp = $target.find( 'input' ),
         idx;
  
     if ( ( idx = options.indexOf( val ) ) > -1 ) {
        options.splice( idx, 1 );
        setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
     } else {
        options.push( val );
        setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
     }
  
     $( event.target ).blur();
        
     console.log( options );
     return false;
  });
  
    var allWindow = $(window),
        top = allWindow.scrollTop(),
        navBar = $(".nav-wrapper");
  
  
  /*-----------------------------------------------
        Javascript Function for The loader
  -----------------------------------------------*/
  
      var allWindow = $(window),
          preloader = $('.loader-con');
  
      allWindow.on("load", function() {
          preloader.fadeOut('slow');
          setTimeout(function() { preloader.css("display","none"); },600);
          allWindow.scrollTop(0);
      });
  
  /*-----------------------------------------------------
    Javascript Function To check Aniamtion support
  -------------------------------------------------------*/
  
      var animation = false,
      animationstring = 'animation',
      keyframeprefix = '',
      domPrefixes = 'Webkit Moz O ms Khtml'.split(' '),
      pfx  = '',
      elm = document.createElement('div');
  
      if( elm.style.animationName !== undefined ) { animation = true; }
  
      if( animation === false ) {
        for( var i = 0; i < domPrefixes.length; i++ ) {
          if( elm.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
            pfx = domPrefixes[ i ];
            animationstring = pfx + 'Animation';
            keyframeprefix = '-' + pfx.toLowerCase() + '-';
            animation = true;
            break;
          }
        }
      }
  
  /*------------------------------------------------------------------
  Javascript Function For Sticky Navigation Bar AND SMOOTH SCROLLING
  -------------------------------------------------------------------*/
  
      // Define stikyNav Function
        function stikyNav() {
  
          top = allWindow.scrollTop();
  
          if ( top >= 100 ) {
            navBar.addClass("nav-sticky");
  
          } else {
            navBar.removeClass("nav-sticky");
          }
  
          // SHow Also Scroll up Button
          if ( top >= 1000 ) {
            $('.scroll-up').addClass("show-up-btn");
          } else {
            $('.scroll-up').removeClass("show-up-btn");
          }
        }
  
  
      // Select all links with hashes
        $('a.scroll[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .on('click', function(event) {
  
            // On-page links
            if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {
  
              // Figure out element to scroll to
              var target = $(this.hash),
                  speed= $(this).data("speed") || 800;
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, speed);
              }
            }
          });
  
        $(".scroll-up").on('click', function (e) {
          e.preventDefault();
          $('html, body').animate({
            scrollTop: 0
          }, 900);
        });
  
  /*---------------------------------------------------------------------
    Javascript Function for Hide Navbar Dropdown After Click On Links
  -------------------------------------------------------------------*/
  
        var navLinks = navBar.find(".navbar-collapse ul li a");
  
        $.each( navLinks, function( i, val ) {
  
          var navLink = $(this);
  
            navLink.on('click', function (e) {
              navBar.find(".navbar-collapse").collapse('hide');
            });
  
        });
  
  /*--------------------------------------------------------------
  Javascript Function For Change active Class on navigation bar
  ----------------------------------------------------------------*/
  
        var sections = $('.one-page-section'),
            nav_height = navBar.height();
  
        // Define ChangeClass Function
        function ChangeClass() {
  
          top = allWindow.scrollTop();
  
            $.each(sections, function(i,val) {
  
              var section = $(this),
                  section_top = section.offset().top - nav_height,
                  bottom = section_top + section.height();
  
                if (top >= section_top && top <= bottom) {
  
                  var naItems = navBar.find('ul li a');
  
                  $.each(naItems ,function(i,val) {
                    var item = $(this);
                    item.removeClass("active");
                  });
  
                  navBar.find('ul a[href="#' + section.attr('id') + '"]').addClass('active');
                }
  
            });
  
        } // End of ChangeClass Function
  
  /*---------------------------------------------------
    Javascript Function FOR PARALLAX EFFECT
  ---------------------------------------------------*/
  
        // create variables
        var backgrounds = $('.parallax');
  
        function parallax() {
  
          // for each of background parallax element
          $.each( backgrounds, function( i, val ) {
  
            var backgroundObj = $(this),
              backgroundObjTop = backgroundObj.offset().top,
              backgroundHeight = backgroundObj.height();
  
            // update positions
            top = allWindow.scrollTop();
  
              var yPos = ((top - backgroundObjTop))/2;
  
              if ( yPos <= backgroundHeight + backgroundObjTop ) {
                backgroundObj.css({
                  backgroundPosition: '50% ' + yPos + 'px'
                });
              }
  
          });
        };
  
  
  /*------------------------------------------
    Javascript for initialize text Typer
  --------------------------------------------*/
  
      // initialize text Typer Only in Modern browsers
      if (animation) {
  
        var text = $('#home .typer-title'),
            textOne = "Blockchain Service Provider",
            textTwo = "Expert in Technologies, Services, Consulting & Marketing";
  
            if (!!$.prototype.typer) {
              text.typer([textOne,textTwo]);
            }
      }
  
  
  
  /*-----------------------------------------------------------------
    Javascript Function for Count To
  ------------------------------------------------------------------*/
  
      var timerCon = $('.timer-con');
  
      //Count To function
      function timerFunction() {
  
        if ( timerCon.length ) {
  
          if (!timerCon.hasClass("done")) {
  
            var timerTop = timerCon.offset().top,
            top = allWindow.scrollTop(),
            winH = allWindow.height() - 100;
  
              if (top >= timerTop - winH) {
                timerCon.addClass("done");
  
                //initialize count to
                 if (!!$.prototype.countTo) {
                  $('.timer').countTo({speed:2500,refreshInterval: 50});
                 }
  
              }
          }
        }
      } //End timerFunction Fuction
  
      // add Event listener to window
      allWindow.on('scroll', function() {
        stikyNav();
        ChangeClass();
        parallax();
        timerFunction();
      });
  
  /*-----------------------------------------------------------------
    Javascript Function for PROGRESS BAR LINES  SCRIPT
  ------------------------------------------------------------------*/
  
      var linesBtn = $(".skills-init"),
          line = $(".hide-skill-bar");
  
      //Progress Bars function
      function progressFunction(e) {
  
          if (!linesBtn.hasClass("done")) {
  
              linesBtn.addClass("done");
              $.each( line, function( i, val ) {
  
              var thisLine = $(this),
                  barText = thisLine.find(".progress-bar-text"),
                  value = parseInt(barText.data("percent"),10),
                  progressCont = $(thisLine).closest('.progress-bar-skills').find("p");
  
                thisLine.css("height", 100 - value + "%");
                progressCont.html(value + "%")
  
              });
          }
      } //End progressFunction Fuction
  
      linesBtn.on('shown.bs.tab', progressFunction);
  
  
  /*------------------------------------------------------
    Javascript Function for filtering portfolio items
  --------------------------------------------------------*/
  
    var portfolioItems = $('.work-item'),
        menu = $('#work-list'),
        menuItems = $('.filter'),
        filterItems = function(ev) {
  
          var target = $(this);
          // Prevent the default link behavior
          ev.preventDefault();
  
          // return if already current
          if (target.hasClass("filter-active")) {
            return false;
          }
  
          // remove current
          var activeLink = menu.find('.filter-active');
  
              activeLink.removeClass('filter-active');
  
          // set current
          target.addClass('filter-active');
  
          $.each( portfolioItems, function( i, val ) {
  
              var portfolioItem = $(this);
  
              if ( target.data("filter") === "all" ) {
  
                portfolioItem.removeClass('filtered');
                setTimeout(function () { portfolioItem.css("display","block"); },500);
  
  
              } else if ( !portfolioItem.hasClass( target.data("filter") ) ) {
  
                portfolioItem.addClass('filtered');
                setTimeout(function() { portfolioItem.css("display","none"); },500);
  
              } else {
  
                portfolioItem.removeClass('filtered');
                setTimeout(function () { portfolioItem.css("display","block"); },500);
  
              }
          });
        };
  
      $.each( menuItems, function( i, val ) {
        $(this).on("click",filterItems);
      });
  
  
  /*----------------------------------------------------------------------
   Javascript Function Initialize Particules
  -----------------------------------------------------------------------*/
  
      //Function to convert hex format to a rgb color
      function rgb2hex(rgb) {
        rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
        return (rgb && rgb.length === 4) ? "#" +
        ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
      }
  
    if ( typeof particlesJS !== "undefined") {
  
      var particlesColor = $(".main-color").css("color"),
        particlesColorHex = rgb2hex(particlesColor);
  
      particlesJS('particles-js',
  
        {
          "particles": {
            "number": {
              "value": 80,
              "density": {
                "enable": true,
                "value_area": 600
              }
            },
            "color": {
              "value": "#FFFFFF",
            },
            "shape": {
              "type": "circle",
              "stroke": {
                "width": 1,
                "color": "#000000"
              },
              "polygon": {
                "nb_sides": 5
              },
              "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
              }
            },
            "opacity": {
              "value": 1,
              "random": false,
              "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
              }
            },
            "size": {
              "value": 3,
              "random": true,
              "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
              }
            },
            "line_linked": {
              "enable": true,
              "distance": 150,
              "color": "#808080",
              "opacity": 0.8,
              "width": 2
            },
            "move": {
              "enable": true,
              "speed": 5,
              "direction": "bottom",
              "random": false,
              "straight": false,
              "out_mode": "out",
              "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
              }
            }
          },
          "interactivity": {
            "detect_on": "canvas",
            "events": {
              "onhover": {
                "enable": true,
                "mode": "repulse"
              },
              "onclick": {
                "enable": true,
                "mode": "push"
              },
              "resize": true
            },
            "modes": {
              "grab": {
                "distance": 400,
                "line_linked": {
                  "opacity": 1
                }
              },
              "bubble": {
                "distance": 400,
                "size": 30,
                "duration": 2,
                "opacity": 8,
                "speed": 3
              },
              "repulse": {
                "distance": 200
              },
              "push": {
                "particles_nb": 4
              },
              "remove": {
                "particles_nb": 2
              }
            }
          },
          "retina_detect": true,
          "config_demo": {
            "hide_card": false,
            "background_color": "#b61924",
            "background_image": "",
            "background_position": "50% 50%",
            "background_repeat": "no-repeat",
            "background_size": "cover"
          }
        }
  
      );
    }
  
  /*-------------------------------------------
   Magnific Popup Portfolio Initializing
  -------------------------------------------*/
  
    if (!!$.prototype.magnificPopup) {
  
      $('.popup-link').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery:{
            enabled:true
        },
      });
  
      $('.pf-gallery-popuap').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery:{
            enabled:true
        },
        zoom: {
          enabled: true,
          duration: 300,
          easing: 'ease-in-out',
        }
      });
  
    }
  
  /*------------------------------------------------------
    Javascript Function for initialize owl carousel
  --------------------------------------------------------*/
  
    if (!!$.prototype.owlCarousel) {
  
       function changeDotColor(slider) {
          var mainColor = $('.main-color').css('color'),
              testDot = slider.find('.owl-dot');
  
          $.each( testDot, function( i, val ) {
            if ($(this).hasClass('active')) {
              $(this).css('background-color',mainColor);
            } else {
              $(this).css('background-color','#fff');
            }
          });
       }
  
      var homeOwl = $('.home-3 .home-carousel');
  
      homeOwl.owlCarousel({
        mouseDrag: true,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        loop: true,
        animateOut: 'fade-out',
        animateIn: 'slide-animation',
        responsive: {
          768: {
            dots: true
          }
        }
      });
  
      changeDotColor(homeOwl);
      // Listen to owl events:
      homeOwl.on('changed.owl.carousel', function(event) {
        changeDotColor(homeOwl);
      });
  
      var testimonialsOwl = $('.testimonials-carousel');
  
      testimonialsOwl.owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000
      });
  
      changeDotColor(testimonialsOwl);
      // Listen to owl events:
      testimonialsOwl.on('changed.owl.carousel', function(event) {
        changeDotColor(testimonialsOwl);
      });
  
  
      $(".pf-details-slider").owlCarousel({
        nav: true,
        navText : [
          "<a class='main-color-bg pf-slider-btn ver-center'><i class='fa fa-chevron-left center effect'></i><span></span></a>",
          "<a class='main-color-bg pf-slider-btn ver-center'><i class='fa fa-chevron-right center effect'></i><span></span></a>"
        ],
        items: 1,
        loop: true,
        dots: false
      });
  
    }
  
  /*------------------------------------------------------------------------
   Javascript Function for Validate and Submit the CONTACT Form Using AJAX
  -------------------------------------------------------------------------*/
  
      // Get the form.
      var form = $('#contact-form'),
          reg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{3,4})$/,
          inputs = $(".input-field");
  
      function validateForm() {
  
        if ($(this).is("#email")) {
  
            var email = $(this).val(),
                res = reg.test(email);
  
            if (res) {
              $(".email-error").html("");
            } else {
              $(".email-error").html("please enter a valid email.");
              return false;
            }
  
        } else {
  
            var target = ($(this).attr("id")),
                targetMessage = $("."+target+"-error");
  
            if ($(this).val() === "") {
  
              targetMessage.html("please enter a valid "+target+".");
              return false;
  
            } else {
              targetMessage.html(" ");
            }
  
        }
      } // End ValidateForm Function
  
      $.each(inputs, function( i, val ) {
        $(this).on("blur", validateForm);
      });
  
  
    /*====================================================================
        Javascript Function for SCHEME COLORS SCRIPT
    ======================================================================*/
  
      function rgbToHsl(r, g, b){
        r /= 255, g /= 255, b /= 255;
        var max = Math.max(r, g, b), min = Math.min(r, g, b);
        var h, s, l = (max + min) / 2;
  
        if(max == min){
            h = s = 0; // achromatic
        }else{
            var d = max - min;
            s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
            switch(max){
                case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                case g: h = (b - r) / d + 2; break;
                case b: h = (r - g) / d + 4; break;
            }
            h /= 6;
        }
  
        return h*360;
      }
  
  
      $("#color-scheme-btn").click(function (e) {
  
        e.preventDefault();
        $(".color-scheme-panel-con").toggleClass("color-scheme-panel-open ");
      });
  
      $("#color-scheme-btn-2").click(function (e) {
  
        e.preventDefault();
        $(".color-scheme-panel-con-2").toggleClass("color-scheme-panel-open-2");
      });
  
    var prevColor, prevBg,
      changeBtns = $(".change-color"),
      templateColorItems = $(".main-color"),
      templateBgColorItems = $(".main-color-bg"),
      titleImg = $('.section-title img');
  
  
    var realColor = rgb2hex(templateColorItems.css("color"));
  
        var r = parseInt(realColor.substr(1,2), 16); // Grab the hex representation of red (chars 1-2) and convert to decimal (base 10).
        var g = parseInt(realColor.substr(3,2), 16);
        var b = parseInt(realColor.substr(5,2), 16);
  
        $.each( titleImg, function( i, val ) {
          $(this).css('filter','hue-rotate('+rgbToHsl(r, g, b)+'deg)')
        });
  
  
    $.each( changeBtns, function( i, val ) {
  
  
      $(this).on("click",function (e) {
  
        e.preventDefault();
  
        var colorsArr = $(this).attr("class").split(" "),
          bgColor = colorsArr[0],
          color = colorsArr[1];
  
          $.each( templateColorItems, function( i, val ) {
  
          if ( $(this).hasClass("main-color") ) {
  
            $(this).removeClass("main-color");
            $(this).addClass(color);
  
          } else {
  
            if (!$(this).hasClass("change-color")) {
  
              $(this).removeClass(prevColor);
              $(this).addClass(color);
  
            }
          }
        });
  
        $.each( templateBgColorItems, function( i, val ) {
  
          if ( $(this).hasClass("main-color-bg") ) {
  
            $(this).removeClass("main-color-bg");
            $(this).addClass(bgColor);
  
          } else {
  
            if (!$(this).hasClass("change-color")) {
  
              $(this).removeClass(prevBg);
              $(this).addClass(bgColor);
  
            }
          }
        });
  
        templateColorItems = $("." + color);
        templateBgColorItems = $("." + bgColor);
        prevColor = color;
        prevBg = bgColor;
  
        realColor = rgb2hex($('.'+color).css("color"));
  
        r = parseInt(realColor.substr(1,2), 16); // Grab the hex representation of red (chars 1-2) and convert to decimal (base 10).
        g = parseInt(realColor.substr(3,2), 16);
        b = parseInt(realColor.substr(5,2), 16);
  
        $.each( titleImg, function( i, val ) {
          $(this).css('filter','hue-rotate('+rgbToHsl(r, g, b)+'deg)');
        });
  
       $('.navbar-brand>img').css('filter','hue-rotate('+rgbToHsl(r, g, b)+'deg)');
  
      });
    });
  
  });
  
  function open_panel() {
    slideIt();
    var a = document.getElementById("sidebar");
    a.setAttribute("id", "sidebar1");
    a.setAttribute("onclick", "close_panel()");
    }
    