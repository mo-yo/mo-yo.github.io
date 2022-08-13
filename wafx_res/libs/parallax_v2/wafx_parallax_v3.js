
class WaFxParallaxV3
{
	static init()
	{
		var requestAnimationFrame = 
		window.requestAnimationFrame || window.mozRequestAnimationFrame ||
		window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
	 	window.requestAnimationFrame = requestAnimationFrame;

		window.addEventListener('resize',(function()
		{
			setTimeout((function(){
				WaFxParallaxV3.initAllElements();
				}),200);
			}
		));
	 	WaFxParallaxV3.initAllElements();
	}

	static initAllElements()
	{
	 	[].forEach.call(document.querySelectorAll('.wafxParallaxV3-wrap'), function(el) {

	 		var b_new = false;
	 		 var parallax_wafx = WaFxNodeData.getData(el,"parallax_obj");
	 		 if (parallax_wafx==undefined)
	 		 {
	 		 	parallax_wafx = new WaFxParallaxV3();
	 		 	b_new = true;
	 		 }
		

		    WaFxNodeData.setData(el,"parallax_obj",parallax_wafx);
		    parallax_wafx.initElement(b_new,{wrapper_div:el});
		    
		});
	}

	 constructor() 
	 {
		this.Targets = [];
		//this.TargetsLength = 0;
		this.wrapper = '';
		this.windowHeight = 0;
		this.wapperOffset = 0;


		this.isAnimate =  false;
		this.isResize  =  false;
		this.scrollId =  "";
		this.resizeId =  "";
	 }


	getClosest(elem, selector) {
		for ( ; elem && elem !== document; elem = elem.parentNode ) {
			if ( elem.matches( selector ) ) return elem;
		}
		return null;
	}

	initElement(b_new,options){
		this.settings = options;
		this.windowHeight = parseFloat((window.innerHeight || document.documentElement.clientHeight || 0));

		this.wrapper =this.settings.wrapper_div;
		this.targets = this.wrapper.querySelectorAll(".wafxParallaxV3-bg");

		if (b_new)
		{
			this.attachEvent();
		}

		this.apply(this.targets,this.wrapper);

		if (b_new)
		{
			this.animate();
			this.resize();
		}		
	}

	apply(targets,wrapper){
		this.wrapperInit();
		
		this.Targets = [];
		for (var i = 0; i < targets.length; i++) 
		{
			this.targetsInit(targets[i]);
		}
	}

	static log(mess)
	{
		console.log(mess);
	}
	wrapperInit(){
		//modif greg
		//this.wrapper.style.width = '100%';
		//this.wrapper.style.position = 'fixed';
	}
	targetsInit(elm_bg){

		this.m_b_fluid = false;

		var scale = parseFloat(elm_bg.getAttribute('data-image-scale'));

		var sizeImageOriginale = new WaFxSize(parseInt(elm_bg.getAttribute('data-original-width')),parseInt(elm_bg.getAttribute('data-original-height')));

		var w_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("width"));
		var h_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("height"));
		
		var x_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("left"));


		var parent_fluid = this.getClosest(this.wrapper,".wafxCompFluid");
		if (parent_fluid!=null)
		{
			var w_item_parent = parseInt(window.getComputedStyle(parent_fluid,null).getPropertyValue("width"));
			w_item = w_item_parent-5;
			this.m_b_fluid = true;
		}

		//wafxCompFluid
		var sizeZoneItem = new WaFxSize(w_item,h_item);
		var size_temp =  sizeImageOriginale.clone();


		size_temp = size_temp.scaledByExpandingAccordingWidth(sizeZoneItem.scaled(scale));





        var w_element = Math.round(Math.max(scale*sizeImageOriginale.width,scale*sizeZoneItem.width));
        var h_element = Math.max(sizeImageOriginale.height,size_temp.height);

		elm_bg.style.backgroundSize=Math.round(size_temp.width)+"px "+size_temp.height+"px";
		elm_bg.style.width=w_element+"px";
		elm_bg.style.height=h_element+"px";

		this.wrapper.style.width=sizeZoneItem.width+"px";

		//var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

		var obj={
			elm : elm_bg,

			offset_y : Math.round(parseFloat(elm_bg.getAttribute('data-offset-y'))),//Math.round(parseFloat(elm_bg.getAttribute('data-offset-y')) * size_temp.height),
			left : 0,
			speedY : parseFloat(elm_bg.getAttribute('data-speed-y')),
		};

		this.Targets.push(obj);
		this.render(obj,0);
	}


	render(target,offset_inertia)
	{
		var elm_bg = target.elm;
		var b_optim = true;
		var posBg = this.computeBgPosition(target);

		var elm_bg = target.elm;

		var scale = parseFloat(elm_bg.getAttribute('data-image-scale'));

		var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

		var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

		/////
		var nodeBlockPage = document.querySelector(".blockPage");
		var rectPage = nodeBlockPage.getBoundingClientRect();
		var windowWidth = Math.max(rectPage.width,document.documentElement.clientWidth);
		var x_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("left"));
		var x_dec = (x_item+(windowWidth-rectPage.width*scale)/2);

		var posX = posBg.x;
		var posY = (posBg.y+offset_inertia);

		elm_bg.style.backgroundAttachment="fixed"
		elm_bg.style.backgroundPosition = posX+"px "+posY+"px";

		if (isFirefox==false)
		{
					elm_bg.style.willChange = "transform";
		elm_bg.style.WebKitOverflowScrolling = "touch";
		}


	}
	scroll()
	{
		var scrollTopTmp = document.documentElement.scrollTop || document.body.scrollTop;
		this.scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		this.scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;

		var offsetBottom = this.scrollTop + this.windowHeight;
		
		this.wrapperUpdate(this.scrollTop);
		for (var i = 0; i < this.Targets.length; i++) {
			this.targetsUpdate(this.Targets[i]);
			
		}
	}
	animate (){
		this.scroll();
		this.scrollId = requestAnimationFrame(this.animate.bind(this));
	}
	wrapperUpdate(){
		this.wrapper.style.transform = 'translate3d(' + 0 + ',' +  Math.round(-this.wapperOffset* 100) / 100 + 'px ,' + 0 + ')';
		//	this.wrapper.style.transform = 'translate3d(' + 0 + ',' +  Math.round(-0) / 100 + 'px ,' + 0 + ')';
	}

	computeBgPosition(target){

		//return;
		var elm_bg = target.elm;

		var scale = parseFloat(elm_bg.getAttribute('data-image-scale'));

		var y_element = Math.round(parseFloat(window.getComputedStyle(this.wrapper.parentNode,null).getPropertyValue("top")));

		var sizeImageOriginale = new WaFxSize(parseInt(elm_bg.getAttribute('data-original-width')),parseInt(elm_bg.getAttribute('data-original-height')));

		var w_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("width"));
		var h_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("height"));



		var sizeZoneItem = new WaFxSize(w_item,h_item);
		var size_temp =  sizeImageOriginale.clone();
		size_temp = size_temp.scaledByExpandingAccordingWidth(sizeZoneItem.scaled(scale));



		var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

		var offsetSpeedY = -this.scrollTop * (target.speedY-1);//(factorSpeed) * ((target.speedY-1));



//alert(target.offset_y)
		var offset_value_Y = target.offset_y*scale;

//alert(y_element)

		var decY = -y_element + (size_temp.height-sizeZoneItem.height)/2;


		offset_value_Y -= decY;

		//offset_value_Y+=target.offset_y;

		//alert(offset_value_Y)
		///
		offset_value_Y -= offsetSpeedY;

		var x_item = parseInt(window.getComputedStyle(this.wrapper,null).getPropertyValue("left"));

		
        var nodeBlockPage = document.querySelector(".blockPage");
        var rectPage = nodeBlockPage.getBoundingClientRect();
     	var windowWidth = Math.max(rectPage.width,document.documentElement.clientWidth);

		var x_dec = 0;//(x_item*scale+(windowWidth-rectPage.width*scale)/2);

		 x_dec =  -this.scrollLeft + x_item  -scale*w_item/2 + ( w_item/2)+ (windowWidth-rectPage.width)/2   -  (size_temp.width-sizeZoneItem.width)/2;
		 
		if (isFirefox)
		{
			x_dec =   -scale*w_item/2 + ( w_item/2);
		}


		if (this.m_b_fluid)
		{
			//x_dec = 0;
			x_dec = - windowWidth/scale;


		}
		var y_dec = offset_value_Y;

		if (isFirefox)
		{
			//x_dec -= (x_item+(windowWidth-rectPage.width)/2);
			y_dec =  this.scrollTop-y_element + offset_value_Y;
		}


		return {"x":x_dec,"y":y_dec};

	
	}
	targetsUpdate(target){
		var offset_inertia = 0;
		this.render(target,offset_inertia);
	}

	resize(){
		var self = this;
		self.windowHeight = parseFloat((window.innerHeight || document.documentElement.clientHeight || 0));
		self.resizeId = requestAnimationFrame(self.resize.bind(self));
	}

	attachEvent()
	{
		
		var self = this;
		window.addEventListener('resize',(function(){
			if(!self.isResize){
				cancelAnimationFrame(self.resizeId);
				cancelAnimationFrame(self.scrollId);
				self.isResize = true;
				setTimeout((function(){
					self.isResize = false;
					self.resizeId = requestAnimationFrame(self.resize.bind(self));
					self.scrollId = requestAnimationFrame(self.animate.bind(self));
				}),200);
			}
		}));
		
		
	}

}

