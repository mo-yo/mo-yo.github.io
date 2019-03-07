
$(document).ready(function()
{$('#wb_indexFontAwesomeIcon1').addClass('visibility-hidden');$('#wb_indexFontAwesomeIcon2').addClass('visibility-hidden');$('#wb_FontAwesomeIcon10').addClass('visibility-hidden');$('#wb_FontAwesomeIcon11').addClass('visibility-hidden');$('#wb_FontAwesomeIcon26').addClass('visibility-hidden');$('#wb_FontAwesomeIcon27').addClass('visibility-hidden');$('#wb_FontAwesomeIcon28').addClass('visibility-hidden');$('#wb_LayoutGrid1').parallax();$("a[href*='#header']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header').offset().top},600,'easeOutSine');});$(document).on('click','.ThemeableMenu1-navbar-collapse.in',function(e)
{if($(e.target).is('a')&&($(e.target).attr('class')!='dropdown-toggle'))
{$(this).collapse('hide');}});function indexFontAwesomeIcon1Scroll()
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
{FontAwesomeIcon28Scroll();});$('#wb_LayoutGrid5').parallax();$("#Progressbar1").progressbar({value:60});$("#Progressbar2").progressbar({value:30});$("#Progressbar3").progressbar({value:10});$("#Progressbar4").progressbar({value:4});$("#Progressbar5").progressbar({value:15});$("a[href*='#services1']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_services1').offset().top-88},600,'easeOutCirc');});});var messages=new Array
('Здоровых пациентов в год','Счастливые клиенты','Награды и сертификаты наших специалистов','Благодарные отзывы пациентов');var speed=40;var currentMsg=0;function doScroller(text,pos,direction)
{var text_scroller=document.getElementById('text_scroller');text_scroller.innerText=''+text.substring(0,pos)+' |';pos+=direction;if(pos>text.length)
{setTimeout('doScroller("'+text+'",'+pos+','+(-direction)+')',speed*50);}
else
{if(pos<0)
{currentMsg++;if(currentMsg>=messages.length)
currentMsg=0;text=messages[currentMsg];direction=-direction;}
setTimeout('doScroller("'+text+'",'+pos+','+direction+')',speed);}}
doScroller(messages[0],0,1);