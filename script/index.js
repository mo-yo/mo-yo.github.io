
$(document).ready(function()
{$('#wb_indexImage8').addClass('visibility-hidden');$('#wb_indexImage9').addClass('visibility-hidden');$('#wb_indexImage10').addClass('visibility-hidden');$("a[href*='#kontakti']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_kontakti').offset().top},600,'linear');});$("a[href*='#onas']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_onas').offset().top},600,'linear');});$("a[href*='#otzivi']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_otzivi').offset().top},600,'linear');});$('#wb_LayoutGrid1').parallax();$("a[href*='#header']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header').offset().top},600,'easeOutSine');});$(document).on('click','.ThemeableMenu1-navbar-collapse.in',function(e)
{if($(e.target).is('a')&&($(e.target).attr('class')!='dropdown-toggle'))
{$(this).collapse('hide');}});$('#wb_count-up').parallax();$("#TextSlider").on('slid.bs.carousel',function(e)
{var index=$(e.relatedTarget).index();switch(index)
{case 0:ShowObjectWithEffect('wb_Name1',1,'slideleft',800,'easeOutQuad');ShowObjectWithEffect('wb_Name2',0,'slideup',500);ShowObjectWithEffect('wb_Name3',0,'slideup',500);ShowObjectWithEffect('Line1',1,'fade',500);ShowObjectWithEffect('Line2',0,'fade',500);ShowObjectWithEffect('Line3',0,'fade',500);break;case 1:ShowObjectWithEffect('wb_Name1',0,'slideup',500);ShowObjectWithEffect('wb_Name2',1,'slideleft',800,'easeOutQuad');ShowObjectWithEffect('wb_Name3',0,'slideup',500);ShowObjectWithEffect('Line1',0,'fade',500);ShowObjectWithEffect('Line2',1,'fade',500);ShowObjectWithEffect('Line3',0,'fade',500);break;case 2:ShowObjectWithEffect('wb_Name1',0,'slideup',500);ShowObjectWithEffect('wb_Name2',0,'slideup',500);ShowObjectWithEffect('wb_Name3',1,'slideleft',800,'easeOutQuad');ShowObjectWithEffect('Line1',0,'fade',500);ShowObjectWithEffect('Line2',0,'fade',500);ShowObjectWithEffect('Line3',1,'fade',500);break;}});$.fn.bootstrapcarousel.Constructor.TRANSITION_DURATION=500;$("#TextSlider").bootstrapcarousel({interval:3000});function indexImage8Scroll()
{var $obj=$("#wb_indexImage8");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_indexImage8','animate-fade-in-left',100,2000);}
else
if($obj.hasClass("in-viewport")&&!$obj.inViewPort(true))
{$obj.removeClass("in-viewport");AnimateCss('wb_indexImage8','animate-fade-in-left',100,2000);}}
if(!$('#wb_indexImage8').inViewPort(true))
{$('#wb_indexImage8').addClass("in-viewport");}
indexImage8Scroll();$(window).scroll(function(event)
{indexImage8Scroll();});function indexImage9Scroll()
{var $obj=$("#wb_indexImage9");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_indexImage9','animate-fade-in-up',100,2000);}
else
if($obj.hasClass("in-viewport")&&!$obj.inViewPort(true))
{$obj.removeClass("in-viewport");AnimateCss('wb_indexImage9','animate-fade-in-up',100,2000);}}
if(!$('#wb_indexImage9').inViewPort(true))
{$('#wb_indexImage9').addClass("in-viewport");}
indexImage9Scroll();$(window).scroll(function(event)
{indexImage9Scroll();});function indexImage10Scroll()
{var $obj=$("#wb_indexImage10");if(!$obj.hasClass("in-viewport")&&$obj.inViewPort(true))
{$obj.addClass("in-viewport");AnimateCss('wb_indexImage10','animate-fade-in-right',100,2000);}
else
if($obj.hasClass("in-viewport")&&!$obj.inViewPort(true))
{$obj.removeClass("in-viewport");AnimateCss('wb_indexImage10','animate-fade-in-right',100,2000);}}
if(!$('#wb_indexImage10').inViewPort(true))
{$('#wb_indexImage10').addClass("in-viewport");}
indexImage10Scroll();$(window).scroll(function(event)
{indexImage10Scroll();});$("a[href*='#uslugi']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_uslugi').offset().top},600,'linear');});$("a[href*='#portfolio']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_portfolio').offset().top},600,'linear');});});$(document).ready(function()
{var $countup=$('#count-up h6');$countup.each(function()
{var $obj=$(this);$obj.data('value',parseInt($obj.html()));$obj.data('done',false);$obj.html('0');});$(window).bind('scroll',function()
{$countup.each(function()
{var $obj=$(this);if(!$obj.data('done')&&$(window).scrollTop()+$(window).height()>=$obj.offset().top)
{$obj.data('done',true);$obj.animate({scroll:1},{duration:2000,step:function(now)
{var $obj=$(this);var val=Math.round($obj.data('value')*now);$obj.html(val);}});}});}).triggerHandler('scroll');});var messages=new Array
('Лечение алкоголизма','Лечение наркомании','Бесплатная консультация','Выезд специалиста на дом','Работаем круглосуточно 24/7','Звоните!','Доступные цены');var speed=40;var currentMsg=0;function doScroller(text,pos,direction)
{var text_scroller=document.getElementById('text_scroller');text_scroller.innerText=''+text.substring(0,pos)+' |';pos+=direction;if(pos>text.length)
{setTimeout('doScroller("'+text+'",'+pos+','+(-direction)+')',speed*50);}
else
{if(pos<0)
{currentMsg++;if(currentMsg>=messages.length)
currentMsg=0;text=messages[currentMsg];direction=-direction;}
setTimeout('doScroller("'+text+'",'+pos+','+direction+')',speed);}}
doScroller(messages[0],0,1);var now=new Date();var startYear="2015";var text="Copyright &copy; ";if(startYear!='')
{text=text+startYear+"-";}
text=text+now.getFullYear()+", Your Name. All rights reserved.";var copyrightnotice=document.getElementById('copyrightnotice');copyrightnotice.innerHTML=text;