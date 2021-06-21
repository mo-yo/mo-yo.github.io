   
   $(document).ready(function()
   {
      $('#reviewsImage1').addClass('visibility-hidden');
      $('#portfolio-image2').addClass('visibility-hidden');
      $('#reviewsImage1').addClass('visibility-hidden');
      $('#portfolio-image2').addClass('visibility-hidden');
      $('#reviewsImage1').addClass('visibility-hidden');
      $('#portfolio-image2').addClass('visibility-hidden');
      $('#reviewsImage1').addClass('visibility-hidden');
      $('#portfolio-image2').addClass('visibility-hidden');
      $("a[href*='#header']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutQuad');
      });
      $("a[href*='#intro']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_intro').offset().top-68 }, 600, 'easeOutCirc');
      });
      $("a[href*='#skills']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_skills').offset().top-68 }, 600, 'easeOutQuad');
      });
      $("a[href*='#services']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_services').offset().top-68 }, 600, 'easeOutQuad');
      });
      function onScrollservices()
      {
         var $obj = $("#wb_services");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('reviewsImage1', 'animate-fade-in-up', 0, 1000);
            AnimateCss('portfolio-image2', 'animate-fade-in-up', 500, 1000);
         }
      }
      onScrollservices();
      $(window).scroll(function(event)
      {
         onScrollservices();
      });
      $("a[href*='#skillsInner']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_skillsInner').offset().top-88 }, 600, 'easeOutCirc');
      });
      function skrollrInit()
      {
         skrollr.init({forceHeight: false, mobileCheck: function() { return false; }, smoothScrolling: false});
      }
      skrollrInit();
      $("a[href*='#servicesLayoutGrid1']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_servicesLayoutGrid1').offset().top-68 }, 600, 'easeOutCirc');
      });
      $("a[href*='#servicesLayoutGrid2']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_servicesLayoutGrid2').offset().top-88 }, 600, 'easeOutCirc');
      });
      $("a[href*='#portfolio']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_portfolio').offset().top-68 }, 600, 'easeOutQuad');
      });
      function onScrollportfolio()
      {
         var $obj = $("#wb_portfolio");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('reviewsImage1', 'animate-fade-in-up', 0, 1000);
            AnimateCss('portfolio-image2', 'animate-fade-in-up', 500, 1000);
         }
      }
      onScrollportfolio();
      $(window).scroll(function(event)
      {
         onScrollportfolio();
      });
      $("a[href*='#portfolioLayoutGrid1']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_portfolioLayoutGrid1').offset().top-88 }, 600, 'easeOutCirc');
      });
      function onScrollportfolioLayoutGrid1()
      {
         var $obj = $("#wb_portfolioLayoutGrid1");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('reviewsImage1', 'animate-fade-in-up', 0, 1000);
            AnimateCss('portfolio-image2', 'animate-fade-in-up', 500, 1000);
         }
      }
      onScrollportfolioLayoutGrid1();
      $(window).scroll(function(event)
      {
         onScrollportfolioLayoutGrid1();
      });
      $("a[href*='#portfolioLayoutGrid2']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_portfolioLayoutGrid2').offset().top-88 }, 600, 'easeOutCirc');
      });
      function onScrollportfolioLayoutGrid2()
      {
         var $obj = $("#wb_portfolioLayoutGrid2");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('reviewsImage1', 'animate-fade-in-up', 0, 1000);
            AnimateCss('portfolio-image2', 'animate-fade-in-up', 500, 1000);
         }
      }
      onScrollportfolioLayoutGrid2();
      $(window).scroll(function(event)
      {
         onScrollportfolioLayoutGrid2();
      });
      function aspectRatioportfolioRollOverText1()
      {
         var $obj = $("#portfolioRollOverText1");
         var height = $obj.width() / 1;
         $obj.css('height', height + 'px');
      }
      $(window).resize(function()
      {
         aspectRatioportfolioRollOverText1();
      });
      aspectRatioportfolioRollOverText1();
      function aspectRatioportfolioRollOverText2()
      {
         var $obj = $("#portfolioRollOverText2");
         var height = $obj.width() / 1;
         $obj.css('height', height + 'px');
      }
      $(window).resize(function()
      {
         aspectRatioportfolioRollOverText2();
      });
      aspectRatioportfolioRollOverText2();
      function aspectRatioportfolioRollOverText3()
      {
         var $obj = $("#portfolioRollOverText3");
         var height = $obj.width() / 1;
         $obj.css('height', height + 'px');
      }
      $(window).resize(function()
      {
         aspectRatioportfolioRollOverText3();
      });
      aspectRatioportfolioRollOverText3();
      function aspectRatioportfolioRollOverText4()
      {
         var $obj = $("#portfolioRollOverText4");
         var height = $obj.width() / 1;
         $obj.css('height', height + 'px');
      }
      $(window).resize(function()
      {
         aspectRatioportfolioRollOverText4();
      });
      aspectRatioportfolioRollOverText4();
      function aspectRatioportfolioRollOverText5()
      {
         var $obj = $("#portfolioRollOverText5");
         var height = $obj.width() / 1;
         $obj.css('height', height + 'px');
      }
      $(window).resize(function()
      {
         aspectRatioportfolioRollOverText5();
      });
      aspectRatioportfolioRollOverText5();
      function aspectRatioportfolioRollOverText6()
      {
         var $obj = $("#portfolioRollOverText6");
         var height = $obj.width() / 1;
         $obj.css('height', height + 'px');
      }
      $(window).resize(function()
      {
         aspectRatioportfolioRollOverText6();
      });
      aspectRatioportfolioRollOverText6();
      $("#skillsProgressbar1").progressbar(
      {
         value: 90,
         change: function() 
         {
            $("#skillsProgressbar1-label").text($(this).progressbar('value') + '%');
         }
      });
      $("#skillsProgressbar2").progressbar(
      {
         value: 80,
         change: function() 
         {
            $("#skillsProgressbar2-label").text($(this).progressbar('value') + '%');
         }
      });
      $("#skillsProgressbar3").progressbar(
      {
         value: 60,
         change: function() 
         {
            $("#skillsProgressbar3-label").text($(this).progressbar('value') + '%');
         }
      });
      $("#skillsProgressbar4").progressbar(
      {
         value: 75,
         change: function() 
         {
            $("#skillsProgressbar4-label").text($(this).progressbar('value') + '%');
         }
      });
      $("a[href*='#contact']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_contact').offset().top-68 }, 600, 'easeOutQuad');
      });
      $("a[href*='#contactForm']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_contactForm').offset().top-88 }, 600, 'easeOutCirc');
      });
      $("#faqAccordion").accordion(
      {
         event: 'click',
         animate: 'easeOutSine',
         active: false,
         collapsible: true,
         header: 'h3',
         heightStyle: 'content'
      });
      $("#PanelLayer").panel({animate: true, animationDuration: 500, animationEasing: 'easeOutElastic', dismissible: false, display: 'overlay', position: 'left'});
      $('.OverlayMenu1 .item-has-children').children('a').on('click', function(event)
      {
         event.preventDefault();
         $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(0,'linear').end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(0,'linear');
      });
   });
      
   $(document).ready(function()
   {
      var $progressbars = $('.ui-progressbar');
      
      $progressbars.each(function() 
      {
        var $obj = $(this);
        $obj.data('value', $obj.progressbar('option', 'value'));
        $obj.data('done', false);
        $obj.progressbar('option', 'value', 0);
      });
      $(window).bind('scroll', function() 
      {
         $progressbars.each(function() 
         {
            var $obj = $(this);
            if (!$obj.data('done') && $(window).scrollTop() + $(window).height() >= $obj.offset().top) 
            {
               $obj.data('done', true);
               $obj.animate({scroll: 1}, 
               { 
                  duration: 3000, 
                  step: function(now) 
                  {
                     var $obj = $(this);
                     var val = Math.round($obj.data('value') * now);
                     $obj.progressbar('option', 'value', val);
                  }
               });
            }
         });
      }).triggerHandler('scroll');
   });
      
   var wb_Timer1;
   function TimerStartTimer1()
   {
      wb_Timer1 = setTimeout(function()
      {
         var event = null;
         ShowPanel('PanelLayer', event);
      }, 1000);
   }
   function TimerStopTimer1()
   {
      clearTimeout(wb_Timer1);
   }
   TimerStartTimer1();
   