
class WaFxSize
{
  constructor(w,h) 
   {
    this.width = (w)?w:0;
    this.height = (h)?h:0;
   }

   toString() 
   {
    return "("+this.width+" , "+this.height+")";
   }

   clone() 
   {
    var cl = new WaFxSize();
    cl = Object.assign(cl, this);
    return cl;
   }
   scaled(factor) 
   {
    var cl  = this.clone();
    cl.width *= factor;
    cl.height *= factor;
    return cl;
   }

   scaledByExpandingAccordingWidth(size) 
   {
      //  var useHeight;
      //  var rw = (size.height) * (this.width) / (this.height);


        //    useHeight = (rw >= size.width);
        
         var cl1 = this.clone();
         /*
        if (useHeight) 
        {
            cl1.width = size.height * this.width/ this.height; //rw;
            cl1.height = size.height;
        } 
        else 
          */
        {
            cl1.height = size.width * this.height/ this.width;
            cl1.width = size.width;
        }
        cl1.width = Math.round(cl1.width)
        cl1.height = Math.round(cl1.height)

        return cl1;
   }



   scaledByExpanding(size) 
   {
        var useHeight;
        var rw = (size.height) * (this.width) / (this.height);

        { 
            useHeight = (rw >= size.width);
        }
         var cl1 = this.clone();
        if (useHeight) 
        {
            cl1.width = size.height * this.width/ this.height; //rw;
            cl1.height = size.height;
        } 
        else 
        {
            cl1.height = size.width * this.height/ this.width;
            cl1.width = size.width;
        }
        cl1.width = Math.round(cl1.width)
        cl1.height = Math.round(cl1.height)

        return cl1;
   }
}


class WaFxMarket
{
  static detectPublicFolder(KEY_STORE)
  {
      var path = window.location.pathname;
      var n1 = path.lastIndexOf("/"+KEY_STORE+"/");
      if (n1>-1)
      {
        path = path.substring(0,n1);
      }
      else
      {
        var n2= path.lastIndexOf("/");
        if (n2>-1)
        {
        path = path.substring(0,n2);
        }
      }

      if (path.length>0)
      {
          if (path.endsWith("/")==false) path +="/";
      }
      return path;
  }
}




class WaFxVirtualScreen
{
  constructor(datas)
  {
      this.datas = datas;
  }

  sourceWidth()
  {
    return this.datas.width_real;
  }

  width()
  {
    return this.datas.width_virtual;
  }
  factor()
  {
    return this.datas.factor;
  }
}



class WaFxWindow
{
  
  static clientSize()
  {
    var w=window,
    d=document,
    e=d.documentElement,
    g=d.getElementsByTagName('body')[0],
    x=w.innerWidth||e.clientWidth||g.clientWidth,
    y=w.innerHeight||e.clientHeight||g.clientHeight;
    return { width: x, height:y};
  }


  static windowSize()
  {
    var body = document.body;
    var html = document.documentElement;

    var width = Math.max( body.scrollWidth, body.offsetWidth, html.clientWidth, html.scrollWidth, html.offsetWidth );
    var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
    return { 'width': width, 'height':height};
  }

  static scrollPosition()
  {
    var x = window.pageXOffset | document.body.scrollLeft;
    var y = window.pageYOffset | document.body.scrollTop;
    return { 'left': x, 'top':y};
  }

  static analyzeCurrentScreen()
  {
      var cur_screen = null;
      var  arrScreens = document.wafxScreenInfos.screens;
      var mapScreens = {};
      for (var i =0;i<arrScreens.length;i++)
      {
          var screen = arrScreens[i];
          if (screen.factor==1)
          {
              mapScreens[screen.width_real] = screen;
          }
      }

      var MARGIN_MEDIA_QUERY_SCREEN = 0;
      for (var i =arrScreens.length-1;i>=0;i--)
      {
              var screen = arrScreens[i];
              var width_ref = screen.width_virtual + 2*MARGIN_MEDIA_QUERY_SCREEN ;
              if (window.matchMedia("(min-width:"+width_ref+"px)").matches)
              {
                cur_screen = screen;
                break;
              }
      }

      if (cur_screen==null)
      {
          cur_screen= arrScreens[0];
      }
/*
          var txt = "";
      if (cur_screen!=null)
      {
        txt+= (" width_real="+cur_screen.width_real+" ");
        txt+= (" width_virtual="+cur_screen.width_virtual+" ");
               txt+= (" factor="+cur_screen.factor+" ");
                //  txt+= (" state="+state+" ");
        
      }
      

      window.console.log("infos="+txt);
      */

      if (WaFxWindow.m_current_screen!=cur_screen)
      {
        WaFxWindow.m_current_screen = cur_screen;
        WaFxWindow.screenChange();
       
      }
  }  
  static currentScreen()
  {
    return new WaFxVirtualScreen(WaFxWindow.m_current_screen);
  }
  static init()
  {
    WaFxWindow.screenChange = function(){

        //alert(WaFxWindow.currentScreen().width_real)
    };
    document.addEventListener("DOMContentLoaded", function() 
    {
        WaFxWindow.analyzeCurrentScreen();
        window.addEventListener("resize", function()
        {
            WaFxWindow.analyzeCurrentScreen();
        });
    });
  }
}
///
WaFxWindow.init();

//

class WaFxNodeGeometry
{
  static boundingRect(node)
  {
    var bounding = node.getBoundingClientRect();
    var right = bounding.left+bounding.width;//node.offsetWidth;
    var bottom = bounding.top+bounding.height;//node.offsetHeight;
    return {'left':bounding.left,'top':bounding.top,'width':bounding.width,'height':bounding.height,'right':right,'bottom':bottom};
  }
  static setVisible(el,b)
  {
    var st = el.style;
    st.display = (b)?'block':'none';
  }

  static isVisible(el) {
    var style = window.getComputedStyle(el);
    return (style.display != 'none')
  }

  static globalPosition(el) 
  {
      var rect = el.getBoundingClientRect();
      var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
  }
  static getStyle(x,styleProp)
  {

      if (x.currentStyle)
          var y = x.currentStyle[styleProp];
      else if (window.getComputedStyle)
          var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
      return y;
  }
}


class WaFxSystem
{

      static getOS() 
      {
        var userAgent = window.navigator.userAgent,
            platform = window.navigator.platform,
            macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
            windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
            iosPlatforms = ['iPhone', 'iPad', 'iPod'],
            os = null;

        if (macosPlatforms.indexOf(platform) !== -1) {
          os = 'MAC';
        } else if (iosPlatforms.indexOf(platform) !== -1) {
          os = 'IOS';
        } else if (windowsPlatforms.indexOf(platform) !== -1) {
          os = 'WIN';
        } else if (/Android/.test(userAgent)) {
          os = 'ANDROID';
        } else if (!os && /Linux/.test(platform)) {
          os = 'LINUX';
        }

        return os;
      }
}



class WaFxNodeData
{
      static setData(el,key,data_object) 
      {

        var method_name = 'getWaFxData_'+key;
        var prop_name = 'getWaFxProp_'+key;

          //el.data = {getType: function(){return this.TYPE},TYPE:data_object};
        if (el.data==undefined) el.data = {};

        el.data[method_name] = function(){return this[prop_name]};
        el.data[prop_name] = data_object;
      }

      static getData(el,key) 
      {
        var method_name = 'getWaFxData_'+key;
        if (el.data==undefined)
        {
          return null;
        }

        if (el.data[method_name]==undefined)
        {
          return null;
        }

          return el.data[method_name]();
      }
}


function reloadScrollBars() {
    document.documentElement.style.overflow = 'auto';  // firefox, chrome
    document.body.scroll = "yes"; // ie only
}

function unloadScrollBars() {
    document.documentElement.style.overflow = 'hidden';  // firefox, chrome
    document.body.scroll = "no"; // ie only
}
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1,33:1,34:1,35:1,36:1};

function preventDefault(e) {
  e = e || window.event;
 // if (e.preventDefault)
  //    e.preventDefault();
  e.returnValue = true;  
 // return true;
}

function preventDefaultForScrollKeys(e) {

  //alert(e.keyCode)
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() 
{
  
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;

  unloadScrollBars()
  
}

function enableScroll()
 {
  
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
    reloadScrollBars()
    
}

