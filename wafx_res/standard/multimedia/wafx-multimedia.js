


class WafxRollOver
{
    static closeAnimFade(el)
    {
          var idAnim1 = WaFxNodeData.getData(el,"anim_fadeout");
          if (idAnim1) cancelAnimationFrame(idAnim1);

          var idAnim2 = WaFxNodeData.getData(el,"anim_fadein");
          if (idAnim2) cancelAnimationFrame(idAnim2);
    };  
    static fadeIn(el, display){
      el.style.opacity = 0;
      (function fade() {
        var val = parseFloat(el.style.opacity);
        if (!((val += .1) > 1)) {

          WafxRollOver.closeAnimFade(el);

          el.style.opacity = val;
          var idAnim = requestAnimationFrame(fade);
          WaFxNodeData.setData(el,"anim_fadein",idAnim);
        }
      })();
    };
    static fadeOut(el){
      el.style.opacity = 1;
      (function fade() {
        if ((el.style.opacity -= .1) < 0) {
        //  el.style.display = "none";
        } else {
          WafxRollOver.closeAnimFade(el);

          var idAnim = requestAnimationFrame(fade);
          WaFxNodeData.setData(el,"anim_fadeout",idAnim);
        }
      })();
    };
    static bindPictureOver(el)
    {
              var picture = WaFxNodeData.getData(el,"picture");
              var mainPicture = WaFxNodeData.getData(picture,"main_picture");
              var overPicture = WaFxNodeData.getData(picture,"over_picture");
              if (overPicture)
              {
                  WafxRollOver.fadeOut(mainPicture);
                  WafxRollOver.fadeIn(overPicture);
              }

    }
    static bindPictureOut(el)
    {
              var picture = WaFxNodeData.getData(el,"picture");
              var mainPicture = WaFxNodeData.getData(picture,"main_picture");
              var overPicture = WaFxNodeData.getData(picture,"over_picture");
              if (overPicture)
              {
                WafxRollOver.fadeIn(mainPicture);
                WafxRollOver.fadeOut(overPicture);
              }

    }

    static bind()
    {
         Array.prototype.forEach.call(document.querySelectorAll('.wafxPictureOver'), function(el){
           
          var mainPicture = el.querySelector('.wafx-img-picture');
          if (mainPicture)
          {
            WaFxNodeData.setData(mainPicture,"picture",el);
            WaFxNodeData.setData(el,"main_picture",mainPicture);
          } 
          var overPicture = el.querySelector('.wafx-img-picture-over');
          if (overPicture)
          {
            WaFxNodeData.setData(overPicture,"picture",el);
            WaFxNodeData.setData(el,"over_picture",overPicture);
          } 
          ///

          mainPicture.addEventListener("mouseover", function()
          {
            WafxRollOver.bindPictureOver(this);
          });

          mainPicture.addEventListener("mouseout", function()
          {
              WafxRollOver.bindPictureOut(this);
          });

          overPicture.addEventListener("mouseover", function()
          {
            WafxRollOver.bindPictureOver(this);
          });

          overPicture.addEventListener("mouseout", function()
          {
              WafxRollOver.bindPictureOut(this);
          });


        });

    }
    static init()
    {
      document.addEventListener("DOMContentLoaded", function() 
      {
        WafxRollOver.bind();

         
      });
    }
}

class WafxRipple
{
    static init()
    {
      document.addEventListener("DOMContentLoaded", function() 
      {
        Array.prototype.forEach.call(document.querySelectorAll('.wafxRipple'), function(el){
            new WaFxRippleEffect(el); // element is instance of javascript element node
        });
      });

    }
}


class WafxFluidHelper
{
    static init()
    {
        window.addEventListener("resize", function()
        {
            WafxFluidHelper.resizeFluidElements();
          //  WafxFluidHelper.resizeFluidElements();
        });

        WaFxWindow.analyzeCurrentScreen();
        WafxFluidHelper.resizeFluidElements();
    }
    static resizeFluidElements()
    {
      WaFxWindow.analyzeCurrentScreen();
          var screen = WaFxWindow.currentScreen();


        var nodeBlockPage = document.querySelector(".blockPage");
        var rectPage = nodeBlockPage.getBoundingClientRect();
       // alert(rectPage.left)
        var windowWidth = Math.max(rectPage.width,document.documentElement.clientWidth);
        [].forEach.call(document.querySelectorAll('.wafxCompFluid'), function(el) 
        {

          if (el.classList.contains('wafxCompFloat'))
          {
            el.style.left =  "0px";
          }
          else
          {
            el.style.left = (-rectPage.left/screen.factor())+"px"
          }
            el.style.width=(windowWidth/screen.factor()-1)+"px"

        });

        [].forEach.call(document.querySelectorAll('.wafxCompSimpleBanner'), function(el) 
        {

        });
    }
}  


class WafxPlyrAudio
{
    static bind()
    {
          [].forEach.call(document.querySelectorAll('.wafx-audio'), function(el) {


                var id_audio = el.getAttribute('id');
                if (id_audio!=null)
                {
                  var config = {
                    'controls':['play', 'progress', 'current-time', 'mute', 'volume'],
                  //  'settings':['captions', 'quality', 'loop'],

                };
                  const player = new Plyr('#'+id_audio,config);
                }
          });
    }

    static init()
    {
      document.addEventListener("DOMContentLoaded", function() 
      {
        WafxPlyrAudio.bind();
      });
    }
}




class WaFxSmtHelper
{
    static buildHtmlBlock(html_list,unid_index)
    {
      var html="";

    //  

      var tag = "p";
      for (var i=0;i<html_list.length;i++)
      {

        var obj = html_list[i];
        var bl_html = obj.html;

        var bl_classes = "wafx-smt-inner smt-wa-default";


         if (i == html_list.length-1)
        {
           bl_classes +=" smt-wa-last-block";
        }


        if (obj.sh_class.length>0)
        {
          bl_classes+=" "+obj.sh_class;
        }
        else
        {
          bl_classes+=" smt-wa-"+unid_index+"-block-"+i;
        }

        var block_tag = "<"+tag+" class=\""+bl_classes+" \">";

        

        bl_html = bl_html.replace("<p>",block_tag);
        bl_html = bl_html.replace("</p>","</"+tag+">");
   

        html += bl_html;
      }

      var final_html = "";
      if (html.length>0)
      {
        final_html += "<div class='wafx-smt-txt-wrap smt-para-wa-"+unid_index+"'>";
        final_html += html;
        final_html += "</div>";
      }
     // 
      return final_html;
    }
}


class WafxBlueImpGallery
{
    static init()
    {
      document.addEventListener("DOMContentLoaded", function() 
      {
            [].forEach.call(document.querySelectorAll('.wafx-lightbox'), function(el) {

              var objDatas  = document.wafxGalleryDatas[el.dataset.galleryId]

                el.onclick = function (event) {

                event = event || window.event;

                var target = event.target || event.srcElement;

                var b_valid = false;
                 var main_index = 0;
   

                if (el.classList.contains('wafx-gallery'))
                {
                    if (target.tagName=="A")
                    {
                      b_valid = true;
                      
                    }
                }
                else
                {
                  b_valid = true;
                }
              //  alert(target.tagName+" "+el.classList.contains('wafx-gallery')+" "+b_valid)
               // if (target.tagName=="A")
               if (b_valid)
                {

                  var index_num = 0;
                    var link = target.src ? target.parentNode : target;

                    var links = this.getElementsByTagName('a');


                    for (var i2=0;i2<links.length;i2++)
                    {
                      if (links[i2].href == link)
                      {
                          index_num = i2;
                          break;
                      }
                    }

                    var first_link = '';
                    if (links.length>0) first_link = links[0];
                    
                     main_index = link;
                    var lightBox_grp = el.dataset.lightboxGrp;
                    if (lightBox_grp!=undefined)
                    {
                      var lightBox_imgIndex = el.dataset.lightboxIndex;
                      if (lightBox_imgIndex==undefined)
                      {
                        lightBox_imgIndex = -1;
                      }

                      links = [];

                      var ind = 0;
                       main_index = 0;
                      var list_images = Array.from(document.querySelectorAll(".wafx-lightbox[data-lightbox-grp='"+lightBox_grp+"']"));
                     // alert(list_images.length)
                      list_images.sort(function (a, b) 
                      {
                        var n1 = parseInt(a.dataset.lightboxIndex);
                        var n2 = parseInt(b.dataset.lightboxIndex);
                        
                        if (n1 < n2) return -1;
                        if (n1 > n2) return 1;
                                  
                        return 0;
                      });


                      [].forEach.call(list_images, function(el2) {
                          
                          var lnk = el2.querySelector("a");
                          links.push(lnk);
                          if (first_link.href==lnk.href)
                          {
                            main_index = ind;

                            index_num = ind;//a vrifier
       
                          }
                          ind++;
                      });
                      ///////
                    }
                    
                    var options = objDatas;
                    if (options==undefined)
                    {
                        options = {};
                    }

                    options.index = main_index
                    options.event= event;
                    options.titleElement= 'p';
                    options.isGallery = true;

                    var obj_blueimp = blueimp.Gallery(links, options);

                    obj_blueimp.setTitle = function (index) 
                    {
                     // alert('setitle')
                      WafxBlueImpCarousel.override_setTitle(this,index,options);
                    }

                //    alert(typeof main_index)
                    obj_blueimp.setTitle(index_num);   
                }
    

                };
            });
      });
    }
    static reload()
    {
    }
}


class WafxBlueImpCarousel
{
    static prepareDatasAccordingScreen(datas)
    {
        var items = datas.items;
        var screen = WaFxWindow.currentScreen();


        for (var i=0;i<items.length;i++)
        {
          var it = items[i];

          it.href = "";
          var resp_src = it.src[screen.sourceWidth()];
          if (resp_src!=undefined)
          {
              it.href = resp_src;
          }
        }
   
        return datas;
    }


    static override_setTitle(slide_root,index,dataCarousel)
    {
          if ((slide_root.list==undefined)||(index>=slide_root.list.length))
          {
            return;
          }

      // alert(dataCarousel)
          //var obj = slide_root.list[index];
          var settings  =dataCarousel.template_settings;
          
          if (settings==undefined)
          {
            settings = {
                "col_bg": "rgba(0,0,0,0.701961)",
                "position": 1,
                "slideshow_version": 2,
                "unid_comp": 2
            }
            dataCarousel.template_settings = settings;
          }
          

          if (settings.slideshow_version==2)
          {
              WafxBlueImpCarousel.override_setTitle_V2(slide_root,index,dataCarousel);
          }
          else
          {
              WafxBlueImpCarousel.override_setTitle_V1(slide_root,index,dataCarousel);
          }
    }

    static override_setTitle_V2(slide_root,index,dataCarousel)
    {
          var settings  =dataCarousel.template_settings;
          var obj = null;

          if (dataCarousel.items==undefined)
          {
            obj = slide_root.list[index]; 
          }
          else
          {
            obj =  dataCarousel.items[index]; 
          }
       // alert(dataCarousel.items)
         // var obj =  dataCarousel.items[index]; 
   
          var txtElement = slide_root.titleElement;

          //alert(obj.html_v2_list)

          var cont = slide_root.container[0];
          var node_text_wrap = cont.parentNode.querySelector(".wafx-slideshow-text-wrap");

          txtElement.empty();
          var node_txt = txtElement[0];



          ///
          var html_v2 = "";
          if (obj.html_v2_list==undefined)
          {
            if (obj.tagName=="A")
            {
              if (obj.title.length>0)
              {
                  html_v2 = obj.title;

                  html_v2 = "<div class='wafx-smt-txt-wrap'><p class='wafx-smt-inner smt-wa-default smt-wa-last-block' style='font-size:16px;color:#ffffff;padding:20px;'>"+html_v2+"</p></div>";

              }

            }
           
          }
          else
          {
            html_v2 = WaFxSmtHelper.buildHtmlBlock(obj.html_v2_list,settings.unid_comp);
          }

        //  alert(html_v2)
          var b_is_empty = true;
          if (html_v2.length>0)
          {
            b_is_empty = false;
          }

          node_txt.innerHTML = html_v2;


         var h0 =  node_txt.offsetHeight ;

          var h2 = WaFxNodeGeometry.getStyle(cont.parentNode,"height");

          if (dataCarousel.isGallery)
          {
            h2 = window.innerHeight
          }
          

          var y = 0;
          if (settings.position==2)
          {
           // alert(parseInt(h2) +"  "+parseInt(h0))
              y = parseInt(h2)-parseInt(h0);
          }

          if (dataCarousel.isGallery)
          {
            node_txt.style.width="100%" 
          }
          node_txt.style.top=y+"px" 
          node_txt.style.left="0px" 



          if (b_is_empty)
          {
              node_txt.style.backgroundColor="transparent";
          }
          else
          {
            node_txt.style.backgroundColor=settings.col_bg;
          }
    }

    static override_setTitle_V1(slide_root,index,dataCarousel)
    {
          var g_template_settings  =dataCarousel.template_settings;
          var KEY_TITLE = '{{title}}';
          var KEY_DESC = '{{desc}}';

          var obj = slide_root.list[index];

          var titleElement = slide_root.titleElement
          var customHTML = obj.custom_html;
          var contentHtml = '';
          if (customHTML.length>0)
          {
              contentHtml = customHTML;
          }
          else
          {
              contentHtml = g_template_settings.html;
          }
          var b_is_empty = contentHtml.length==0;

          if (contentHtml.includes(KEY_TITLE) || contentHtml.includes(KEY_TITLE))
          {
              if ((obj.title.length==0)&&(obj.description.length==0))
              {
                b_is_empty = true;
              }
          }

          contentHtml = contentHtml.replace('{{title}}', obj.title);
          contentHtml = contentHtml.replace('{{desc}}', obj.description);
          contentHtml = contentHtml.replace('{{col_text}}', g_template_settings.col_text);
          contentHtml = contentHtml.replace('{{col_bg}}', g_template_settings.col_bg);

          var link_url  =obj.link;
          if (link_url.length==0)link_url="javascript:void(0)"

          contentHtml = contentHtml.replace('{{lnk}}', link_url);
          contentHtml = contentHtml.replace('{{lnk_target}}', obj.target_link);

          titleElement.empty();

          titleElement[0].style.top=(g_template_settings.position==2)?"auto":"0px";

          WaFxNodeGeometry.setVisible(titleElement[0],b_is_empty==false);

          if (contentHtml.length>0) 
          {
            titleElement[0].innerHTML = contentHtml;
          }
    }

    static reload()
    {
          [].forEach.call(document.querySelectorAll('.wafx-carousel'), function(el) {
          var id_carousel = el.getAttribute('id');
          if (id_carousel!=null)
          {
                  var dataCarousel = WafxBlueImpCarousel.prepareDatasAccordingScreen(document.wafxCarouselDatas[id_carousel]);

                  var obj = WaFxNodeData.getData(el,"obj_carousel");

                  if (obj)
                  {

                    obj.list = dataCarousel.items
                    obj.num = dataCarousel.items.length;
                  }
                  else
                  {
                      obj = blueimp.Gallery(
                      dataCarousel.items,
                      {
                          container: '#'+id_carousel,
                          carousel: true,
                          titleElement: '.title',
                          stretchImages: dataCarousel.stretchImages,
                          startSlideshow: dataCarousel.startSlideshow,
                          slideshowInterval: dataCarousel.slideshowInterval,
                          
                      }
                  );
                  }

                  WaFxNodeData.setData(el,"obj_carousel",obj);
                  
                  
                  obj.setTitle = function (index) 
                  {
                    WafxBlueImpCarousel.override_setTitle(this,index,dataCarousel);
                  }

                  obj.toggleControls = function () {

                       // alert(this.index)
                        var controlsClass = this.options.controlsClass
                        if (this.container.hasClass(controlsClass)) 
                        {
                          this.container.removeClass(controlsClass)
                        } else 
                        {
                          this.container.addClass(controlsClass)
                        }

                        obj.setTitle(this.index);   
                      }
                  obj.setTitle(0);   
                  
          }


      });
    }

    static init()
    {
      document.addEventListener("DOMContentLoaded", function() 
      {
        //  WafxBlueImpCarousel.reload()
      });
    }
}