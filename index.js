
$(document).ready(function()
{$("a[href*='#indexLayer1']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#indexLayer1').offset().top},600,'linear');});$("a[href*='#header']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_header').offset().top},600,'easeOutCirc');});$("a[data-rel='gallery']").attr('rel','gallery');$("#gallery").magnificPopup({delegate:'a',type:'image',gallery:{enabled:true,navigateByImgClick:true}});$("#indexAccordion1").accordion({event:'click',animate:'linear',active:false,collapsible:true,header:'h4',heightStyle:'content'});$("a[href*='#LayoutGrid4']").click(function(event)
{event.preventDefault();$('html, body').stop().animate({scrollTop:$('#wb_LayoutGrid4').offset().top-88},600,'easeOutCirc');});$(window).on('resize',function()
{ResponsiveVideo('VideoBackground-video');});ResponsiveVideo('VideoBackground-video');});