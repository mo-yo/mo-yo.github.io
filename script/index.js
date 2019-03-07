
$(document).ready(function()
{$('#wb_LayoutGrid1').parallax();$("a[href*='#header']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header').offset().top},600,'easeOutSine');});$(document).on('click','.ThemeableMenu1-navbar-collapse.in',function(e)
{if($(e.target).is('a')&&($(e.target).attr('class')!='dropdown-toggle'))
{$(this).collapse('hide');}});$('#wb_count-up').parallax();});$(document).ready(function()
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
doScroller(messages[0],0,1);