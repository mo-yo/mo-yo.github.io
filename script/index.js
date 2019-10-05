
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
{onScrollindexText5();});$("a[data-rel='indexPhotoCollage1']").attr('rel','indexPhotoCollage1');$("a[rel^='indexPhotoCollage1']").fancybox({});$("#indexPhotoCollage1").photocollage({effect:'scale',duration:600,padding:4,matrix:'2,0,1,0,0,1,1,1,1'});});