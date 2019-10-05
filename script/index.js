
$(document).ready(function()
{$('#wb_indexText5').addClass('visibility-hidden');function onScrollindexText5()
{var $obj=$("#wb_indexText5");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_indexText5','animate-fade-in-left',0,2000);}
else
if($obj.hasClass("in-viewport")&&!$obj.inViewPort(true))
{$obj.removeClass("in-viewport");AnimateCss('wb_indexText5','animate-fade-in-left',0,2000);}}
if(!$('#wb_indexText5').inViewPort(true))
{$('#wb_indexText5').addClass("in-viewport");}
onScrollindexText5();$(window).scroll(function(event)
{onScrollindexText5();});$("a[data-rel='indexPhotoCollage1']").attr('rel','indexPhotoCollage1');$("a[rel^='indexPhotoCollage1']").fancybox({});$("#indexPhotoCollage1").photocollage({effect:'scale',duration:600,padding:4,matrix:'2,0,1,0,0,1,1,1,1'});$("#indexRollOver1 a").hover(function(e)
{$(".hover",this).css("left","-100%");$(".hover",this).css("zIndex","3");$("img",this).stop().animate({left:"0px"},{queue:false,duration:500});},function()
{$(".hover",this).stop().animate({left:"-100%"},{queue:false,duration:500});});$("#indexRollOverText1").hover(function()
{var y=$(this).height()-$(".caption",this).outerHeight();$(".caption",this).css("top",y);$(".caption",this).stop().animate({opacity:0.60},{queue:false,duration:500});},function()
{$(".caption",this).stop().animate({opacity:0},{queue:false,duration:500});});});