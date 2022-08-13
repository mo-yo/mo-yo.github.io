/*
https://plainjs.com/javascript/styles/getting-width-and-height-of-an-element-23/
*/
function getOffset( el ) {
    var _x = 0;
    var _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
    return { top: _y, left: _x };
}


function getStyle(x,styleProp)
{

    if (x.currentStyle)
        var y = x.currentStyle[styleProp];
    else if (window.getComputedStyle)
        var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
    return y;
}


class WafxReadMore
{
  static close()
  {

      [].forEach.call(document.querySelectorAll('.wafx-readmore-label'), function(el) 
      {
        el.parentNode.removeChild(el);
      });
      [].forEach.call(document.querySelectorAll('.wafx-readmore-modal-content'), function(el) 
      {
        el.parentNode.removeChild(el);
      });
      [].forEach.call(document.querySelectorAll('.wafx-readmore-modal-bg'), function(el) 
      {
        el.parentNode.removeChild(el);
      });
  }
  static showFullText(cl_comp)
    {
      var screen = WaFxWindow.currentScreen();
      var factor = screen.factor();
      var blockPage = document.querySelector('.blockPage'); 
      var cont = document.querySelector('.blockPagecontainer'); 
      var div_box = document.querySelector('.'+cl_comp);
      var div_content = div_box.querySelector(".wafx-smt-txt-wrap");
      var style = window.getComputedStyle ? getComputedStyle(div_content, null) : div_content.currentStyle;
      var marginTop = parseInt(style.marginTop) || 0;
      var contenair_bg_modal = document.body;
      var htmlModalBg = "width: 100%;height: 100%;min-height: 100%;position: fixed;top: 0;left: 0;background-color: rgba(0,0,0,.7);visibility: visible;opacity: 0;transition: opacity 0.4s;";
      var div_bg_modal = document.createElement("div");

      div_bg_modal.classList.add('wafx-readmore-modal-bg');
      div_bg_modal.setAttribute("style",htmlModalBg);
      div_bg_modal = cont.appendChild(div_bg_modal);

      ///////

      var clone_content = div_content.cloneNode(true);

//alert(div_content.clientWidth)
//clone_content.style.width="50%;"


      clone_content.style.webkitMaskImage = '';

      clone_content.style.position="relative";

      clone_content.style.width = (factor*(div_content.clientWidth ))+"px"
      clone_content.style.left = (0)+"px";
      clone_content.style.top = (0)+"px";
//clone_content.style.width=""

     [].forEach.call(clone_content.querySelectorAll("p,h1,h2,h3,h4,h5,h6"), function(el_para) 
        {
            
            el_para.style.setProperty('color', "#001f3f","important");
            [].forEach.call(el_para.querySelectorAll('a'), function(el) 
              {
               el.style.setProperty("color","#0074D9","important");
              });
        });



      var paddingZone = 20;

//"wafx-readmore-bt-close"

      var div_wrap_content = document.createElement("div");
      div_wrap_content.classList.add('wafx-readmore-modal-content');
      div_wrap_content.classList.add('wafxWow');
      div_wrap_content.classList.add('fadeIn');

      div_wrap_content.appendChild(clone_content);



      cont.appendChild(div_wrap_content);




      div_wrap_content.style.backgroundColor="rgba(255,255,255,1)"
      div_wrap_content.style.position="absolute";
      div_wrap_content.style.left =factor*(getOffset(div_box).left-cont.offsetLeft-paddingZone)+"px"
      div_wrap_content.style.top = factor*(getOffset(div_box).top-paddingZone)+"px"
      div_wrap_content.style.padding="0px";
      div_wrap_content.style.margin="0px";
      div_wrap_content.style.width = factor*(div_content.clientWidth + 2*marginTop)+"px"



      div_wrap_content.style.padding=paddingZone+"px";
      div_wrap_content.style.paddingTop=(paddingZone+10)+"px";

      div_wrap_content.style.boxShadow = "0 4px 8px 0 rgba(0, 0, 0, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.9)";


      div_bg_modal.style.visibility="visible";
      div_bg_modal.style.opacity="1";

      var div_button_close = document.createElement("div");
      div_button_close.innerHTML="<a href='javascript:WafxReadMore.bind()' style='top:3px;right:13px;' class='wafx-readmore-bt-close'></a>"
      div_wrap_content.appendChild(div_button_close);


      div_bg_modal.addEventListener('click', function () {

          WafxReadMore.bind();
      });

    }

    ////
    static bind()
    {

      WafxReadMore.close();


      [].forEach.call(document.querySelectorAll('.wafx-read-more'), function(el) {

      

        var div_box = el;
        var div_content = div_box.querySelector(".wafx-smt-txt-wrap");

        var style = window.getComputedStyle ? getComputedStyle(div_content, null) : div_content.currentStyle;

        var marginLeft = parseInt(style.marginLeft) || 0;
        var marginRight = parseInt(style.marginRight) || 0;
        var marginTop = parseInt(style.marginTop) || 0;
        var marginBottom = parseInt(style.marginBottom) || 0;

        var height_box = div_box.clientHeight;
              
        var height_content = marginTop + div_content.offsetHeight;
        var lineHeight = parseInt(getStyle(div_content, 'line-height' ));


        div_content.style.webkitMaskImage = '';

      // if (false)
        if (height_content + (lineHeight*0.5)>height_box)
        {
          var list_class= div_box.getAttribute('class');
          var cl_comp = list_class.split(' ')[0].trim();

          //alert(div_content.tagName +" "+height_box+" "+height);
          var height_ref = height_box;

          var all_paragraphs = div_content.querySelectorAll("p,h1,h2,h3,h4,h5,h6");


          var last_paragraph = all_paragraphs[all_paragraphs.length-1];

          var text_valign = getStyle(div_content,'align-self');

          var text_color = getStyle(last_paragraph,'color');
          //alert(getStyle(div_content,'color'));
          var html_arrow_down = "<div style='border-color:"+text_color+";' class='wafx-readmore-arrow-down'></div>";

          var top_pos_arrow = height_box-lineHeight;//-marginTop;

          var div_end="<div style='border:0px solid green;text-align:center;position:absolute;left:0px;width:"+(div_box.offsetWidth)+"px;top:"+(top_pos_arrow)+"px;' ";
          div_end += "class='smt-wa-38081c34_b725_4e11_bd24_ed14a46858ae'>";
          div_end += "<div style='width:100%;border:0px solid red;text-decoration:none !important;cursor:pointer;' onclick=\"WafxReadMore.showFullText('"+cl_comp+"')\">"+html_arrow_down+"</div>"
          div_end += "</div>";
    


          var divReadMoreLabel = document.createElement("div");
          divReadMoreLabel.classList.add('wafx-readmore-label');
          divReadMoreLabel.innerHTML = div_end;
          div_box.appendChild(divReadMoreLabel);

         // divReadMoreLabel.style.width = "100%"
          

          //div_box.style.backgroundColor="red"

          height_content = marginTop + div_content.offsetHeight;
         // height_content =  div_content.offsetHeight;

          var valign_offset_y = 0;
          if (text_valign=="center")
          {
            valign_offset_y = (height_content-height_ref)/2;
          }
          if (text_valign=="flex-end")
          {
            valign_offset_y = marginTop+(height_content-height_ref);
          }
         // console.log("height_content="+height_content+" height_ref="+height_ref+" text_valign="+text_valign);

          height_ref += valign_offset_y;
      
          var maskStopPercent1 = (height_ref-2*lineHeight)/height_content;
          var maskStopPercent2 = (height_ref-lineHeight)/height_content;
          div_content.style.webkitMaskImage = '-webkit-gradient(linear, left top, left bottom,color-stop(0.00,rgba(0,0,0,1)),color-stop('+maskStopPercent1+',rgba(0,0,0,1)),color-stop('+maskStopPercent2+',rgba(0,0,0,0)),color-stop(1.00,rgba(0,0,0,0)))';

          setTimeout(function()
            {

                    height_content = marginTop + div_content.offsetHeight;
                    var maskStopPercent1 = (height_ref-2*lineHeight)/height_content;
                    var maskStopPercent2 = (height_ref-lineHeight)/height_content;
                    div_content.style.webkitMaskImage = '-webkit-gradient(linear, left top, left bottom,color-stop(0.00,rgba(0,0,0,1)),color-stop('+maskStopPercent1+',rgba(0,0,0,1)),color-stop('+maskStopPercent2+',rgba(0,0,0,0)),color-stop(1.00,rgba(0,0,0,0)))';

            }, 50);


          
        }
          });
          
    }

    static init()
    {
      document.addEventListener("DOMContentLoaded", function() 
      {
        WafxReadMore.bind();
      });

      /*
      window.addEventListener("resize", function()
      {
          WafxReadMore.bind();
      });
      */
    }
}