function animatedslider_pluginAppObj_5_12(){function resize(){pluginAppObj_5_12Swiper.destroy(!0);resizeAnimatedSwiper_pluginAppObj_5_12();loadSwiper()}function resizeAnimatedSwiper_pluginAppObj_5_12(){var height=350,width=500,controls_padding=70,container_width=$("#pluginAppObj_5_12").width(),max_width=container_width<width?container_width:width;height=(max_width-controls_padding)/width*height;width=max_width-controls_padding;$("#pluginAppObj_5_12 .swiper-container.main").css({width:width,height:height});$("#pluginAppObj_5_12 .swiper-button-next, #pluginAppObj_5_12 .swiper-button-prev").css({top:height/2});$("#swiper_pluginAppObj_5_12").css({width:max_width,height:height+18})}function loadSwiper(){pluginAppObj_5_12Swiper=new Swiper("#pluginAppObj_5_12 .swiper-container.main",{freeMode:!1,speed:1e3,loop:!0,direction:"horizontal",roundLengths:!0,autoplay:3e3,autoplayDisableOnInteraction:!1,pagination:"#pluginAppObj_5_12 .swiper-pagination",paginationClickable:!0,nextButton:"#pluginAppObj_5_12 .swiper-button-next",prevButton:"#pluginAppObj_5_12 .swiper-button-prev",effect:getBestEffect("cube"),cube:{slideShadows:!1,shadow:!1}})}function isIE(){var ua=window.navigator.userAgent,old_ie=ua.indexOf("MSIE "),new_ie=ua.indexOf("Trident/");return old_ie>-1||new_ie>-1}function getBestEffect(effect){return effect=="none"?"fade":isIE()&&["cube","flip","stack"].indexOf(effect)>=0?"fade":effect}var pluginAppObj_5_12Swiper;x5engine.boot.push(function(){resizeAnimatedSwiper_pluginAppObj_5_12();loadSwiper(),function($){var $window=$(window);$window.resize(resize)}(jQuery)})}