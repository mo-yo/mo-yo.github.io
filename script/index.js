
$(document).ready(function()
{$('#wb_indexFontAwesomeIcon1').addClass('visibility-hidden');$('#wb_indexFontAwesomeIcon2').addClass('visibility-hidden');$('#wb_FontAwesomeIcon10').addClass('visibility-hidden');$('#wb_FontAwesomeIcon11').addClass('visibility-hidden');$('#wb_FontAwesomeIcon26').addClass('visibility-hidden');$('#wb_FontAwesomeIcon27').addClass('visibility-hidden');$('#wb_FontAwesomeIcon28').addClass('visibility-hidden');$('#wb_LayoutGrid1').parallax();$("a[href*='#header']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header').offset().top},600,'easeOutSine');});$(document).on('click','.ThemeableMenu1-navbar-collapse.in',function(e)
{if($(e.target).is('a')&&($(e.target).attr('class')!='dropdown-toggle'))
{$(this).collapse('hide');}});var NewsFeedTicker1_Data=new Array();NewsFeedTicker1_Data[0]=["http://","","","&#1047;&#1076;&#1086;&#1088;&#1086;&#1074;&#1099;&#1093; &#1087;&#1072;&#1094;&#1080;&#1077;&#1085;&#1090;&#1086;&#1074; &#1074; &#1075;&#1086;&#1076;"];NewsFeedTicker1_Data[1]=["http://","","","&#1057;&#1095;&#1072;&#1089;&#1090;&#1083;&#1080;&#1074;&#1099;&#1077; &#1082;&#1083;&#1080;&#1077;&#1085;&#1090;&#1099;"];NewsFeedTicker1_Data[2]=["http://","","","&#1041;&#1083;&#1072;&#1075;&#1086;&#1076;&#1072;&#1088;&#1085;&#1099;&#1077; &#1086;&#1090;&#1079;&#1099;&#1074;&#1099; &#1087;&#1072;&#1094;&#1080;&#1077;&#1085;&#1090;&#1086;&#1074;"];NewsFeedTicker1_Data[3]=["http://","","","&#1053;&#1072;&#1075;&#1088;&#1072;&#1076;&#1099; &#1080; &#1089;&#1077;&#1088;&#1090;&#1080;&#1092;&#1080;&#1082;&#1072;&#1090;&#1099; &#1085;&#1072;&#1096;&#1080;&#1093; &#1089;&#1087;&#1077;&#1094;&#1080;&#1072;&#1083;&#1080;&#1089;&#1090;&#1086;&#1074;"];$("#NewsFeedTicker1").newsviewer({mode:'rotate',pause:2000,pause:2000,animation:4,animationDuration:1000,sortOrder:0,dataSource:'local',param:NewsFeedTicker1_Data,target:'_self',includeDate:false,maxItems:10});function indexFontAwesomeIcon1Scroll()
{var $obj=$("#wb_indexFontAwesomeIcon1");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_indexFontAwesomeIcon1','transform-lightspeed-in',100,1000);}}
indexFontAwesomeIcon1Scroll();$(window).scroll(function(event)
{indexFontAwesomeIcon1Scroll();});function indexFontAwesomeIcon2Scroll()
{var $obj=$("#wb_indexFontAwesomeIcon2");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_indexFontAwesomeIcon2','transform-lightspeed-in',200,1000);}}
indexFontAwesomeIcon2Scroll();$(window).scroll(function(event)
{indexFontAwesomeIcon2Scroll();});function FontAwesomeIcon10Scroll()
{var $obj=$("#wb_FontAwesomeIcon10");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_FontAwesomeIcon10','transform-lightspeed-in',300,1000);}}
FontAwesomeIcon10Scroll();$(window).scroll(function(event)
{FontAwesomeIcon10Scroll();});function FontAwesomeIcon11Scroll()
{var $obj=$("#wb_FontAwesomeIcon11");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_FontAwesomeIcon11','transform-lightspeed-in',400,1000);}}
FontAwesomeIcon11Scroll();$(window).scroll(function(event)
{FontAwesomeIcon11Scroll();});function FontAwesomeIcon26Scroll()
{var $obj=$("#wb_FontAwesomeIcon26");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_FontAwesomeIcon26','transform-lightspeed-in',500,1000);}}
FontAwesomeIcon26Scroll();$(window).scroll(function(event)
{FontAwesomeIcon26Scroll();});function FontAwesomeIcon27Scroll()
{var $obj=$("#wb_FontAwesomeIcon27");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_FontAwesomeIcon27','transform-lightspeed-in',600,1000);}}
FontAwesomeIcon27Scroll();$(window).scroll(function(event)
{FontAwesomeIcon27Scroll();});function FontAwesomeIcon28Scroll()
{var $obj=$("#wb_FontAwesomeIcon28");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(false))
{$obj.addClass("in-viewport");AnimateCss('wb_FontAwesomeIcon28','transform-lightspeed-in',700,1000);}}
FontAwesomeIcon28Scroll();$(window).scroll(function(event)
{FontAwesomeIcon28Scroll();});$('#wb_LayoutGrid5').parallax();$("#Progressbar1").progressbar({value:60});$("#Progressbar2").progressbar({value:30});$("#Progressbar3").progressbar({value:10});$("#Progressbar4").progressbar({value:4});$("#Progressbar5").progressbar({value:15});});