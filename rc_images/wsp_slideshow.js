// RocketCake Slideshow implementation
// (c) by Nikolaus Gebhardt / Ambiera e.U.
// parameters:
// imageArr: Array of urls to the images to be shown
function wsp_slideshow(elementid, imageArr, animationMode, timeForFrame, timeForFade, adjustMode, linksArr)
{
	var maindiv = document.getElementById(elementid);
	if (!maindiv)
		return;
	
	if (linksArr && imageArr.length != linksArr.length)
		linksArr = null;
				
	// dummy image for keeping aspect ratio of slideshow in height=auto mode
	
	if (imageArr.length > 0)
	{
		var dummyelem = document.createElement('img');
		dummyelem.src = imageArr[0];
		dummyelem.style.position = 'relative';
		dummyelem.style.display = 'block';
		dummyelem.style.width = '100%'; 
		try { dummyelem.style.opacity = "0.0"; } catch(e) {} // hide
		maindiv.appendChild(dummyelem);	
	}
			
	// load and place images
	
	this.images = new Array();
		
	for (var i=0; i<imageArr.length; ++i)
	{
		var imgelem = document.createElement('img');
		imgelem.src = imageArr[i];
		imgelem.style.position = 'absolute';
		imgelem.style.top = '0';
		imgelem.style.left = '0';
		
		switch(adjustMode)
		{
		case null:
			break;
		case 'width':
			imgelem.style.width = '100%'; 
			break;
		case 'height':
			imgelem.style.height = '100%'; 
			break;
		case 'cover':
			// done during animate and switching in adjustImageSizeForCover()
			break;
		}		
		
		// links
		
		if (linksArr)
		{
			imgelem.imgLink = linksArr[i];
			imgelem.style.cursor = 'pointer';
			imgelem.onclick = function() { window.location = this.imgLink; };
		}
		
		// add		
		
		imgelem.style.display = i == 0 ? 'block' : 'none';
		maindiv.appendChild(imgelem);
		
		this.images.push(imgelem);
	}
	
	// store data
	
	if (timeForFrame == null)
		timeForFrame = 1000;
		
	if (timeForFade == null)
		timeForFade = timeForFrame * 0.25;
	if (timeForFade > timeForFrame * 0.5)
		timeForFade = timeForFrame * 0.5;
		
	this.timeForFrame = timeForFrame;
	this.timeForFade = timeForFade;
	this.currentFrame = 0;
	this.lastShownFrame = -1;
	this.thisFrameBegin = this.getTimeMs();
	this.animationMode = animationMode;
	this.adjustMode = adjustMode;
	this.elementId = elementid;
	this.isFirstFrame = true;
	
	this.adjustImageSizeForCover();
	
	// set timer for adjusting image sizes in cover mode
	
	var me = this;
	
	if (adjustMode == 'cover')
		setInterval(function(){ me.adjustImageSizeForCover(); }, 50);
	
	// start timer to fade in and out images
	
	if (imageArr.length < 2)
		return;
		
	mytimeout = setInterval(function(){ me.onFrame(); }, 50);
}


wsp_slideshow.prototype.calculateFade = function(now)
{
	// calculate animation values
	
	var fadeintime = now - this.thisFrameBegin;
	
	var currentImageAlpha = 1.0;
	var lastImageAlpha = 1.0;
		
	if (this.animationMode != 'none' && !this.isFirstFrame && fadeintime >= 0 && fadeintime <= this.timeForFade)
	{		
		if (fadeintime != 0)
			currentImageAlpha = fadeintime / this.timeForFade;
		else
			currentImageAlpha = 0;
			
		lastImageAlpha = 1.0 - currentImageAlpha;				
	}
	else
	{
		lastImageAlpha = 0;
		currentImageAlpha = 1;
	}
	
	// now do animation
	
	if (this.animationMode == 'slide')
	{
		// animation mode: slide
		
		this.images[this.currentFrame].style.left = 100 - Math.floor(currentImageAlpha * 100) + "%";
		if (this.lastShownFrame != -1)
			this.images[this.lastShownFrame].style.left = 0 - Math.floor(currentImageAlpha * 100) + "%";
	}
	else
	{
		// animation mode: fade or nothing
		
		this.setAlpha(currentImageAlpha, this.images[this.currentFrame]);
	
		if (this.lastShownFrame != -1)
			this.setAlpha(lastImageAlpha, this.images[this.lastShownFrame]);
	}
}


wsp_slideshow.prototype.onFrame = function()
{
	var now = this.getTimeMs();
	var delta = now - this.thisFrameBegin;
	if (delta > this.timeForFrame)
	{
		// switch to next frame
		this.thisFrameBegin = now;
		this.gotoNextFrame();
	}
	else
	{
		this.calculateFade(now);
	}
}	

wsp_slideshow.prototype.setAlpha = function(alpha, img)
{
	img.style.filter="Alpha(Opacity="+(alpha*100)+")";
	img.style.MozOpacity = alpha;
	img.style.opacity = alpha;
}

// adjusts image size to remove gap in slideshow
wsp_slideshow.prototype.adjustImageSizeForCover = function(img)
{
	if (this.adjustMode != 'cover')
		return;
		
	var maindiv = document.getElementById(this.elementId);
	if (!maindiv)
		return;
		
	var h = maindiv.clientHeight;
	var w = maindiv.clientWidth;
	if (!h || !w)
		return;
		
	var idx = this.currentFrame;
	if (idx < 0 || this.images.length < idx)
		return;
		
	var img = this.images[idx];
	if (!img)
		return;
		
	if (img.width == 0 || img.height == 0)
		return;
	
	// set size
	
	var aspectW = w / img.width;
	
	var imgSizeWidth = w;
	var imgSizeHeight = img.height * aspectW;
	
	if (imgSizeHeight < h)
	{
		var aspectH = h / img.height;

		imgSizeWidth = img.width * aspectH;
		imgSizeHeight = h;
	}
	
	// set
	
	img.style.width = Math.floor(imgSizeWidth) + 'px';
	img.style.height = Math.floor(imgSizeHeight) + 'px';
}


wsp_slideshow.prototype.getTimeMs = function()
{
	return (new Date()).getTime();
}

wsp_slideshow.prototype.gotoNextFrame = function()
{
	if (this.lastShownFrame != -1)
		this.images[this.lastShownFrame].style.display = 'none';
		
	this.lastShownFrame = this.currentFrame;
	++this.currentFrame;
	if (this.currentFrame >= this.images.length)
		this.currentFrame = 0;
	
	this.isFirstFrame = false;
		
	this.images[this.currentFrame].style.display = 'block';
	this.images[this.lastShownFrame].style.display = 'block';
	this.thisFrameBegin = this.getTimeMs();
	this.calculateFade(this.thisFrameBegin);
}

wsp_slideshow.prototype.gotoPreviousFrame = function()
{
	if (this.lastShownFrame != -1)
		this.images[this.lastShownFrame].style.display = 'none';
		
	this.lastShownFrame = this.currentFrame;
	--this.currentFrame;
	if (this.currentFrame < 0)
		this.currentFrame = this.images.length - 1;
	
	this.isFirstFrame = false;
		
	this.images[this.currentFrame].style.display = 'block';
	this.images[this.lastShownFrame].style.display = 'block';
	this.thisFrameBegin = this.getTimeMs();
	this.calculateFade(this.thisFrameBegin);
}
