class WaFxMFrameExt {

	static changeScreen() 
  	{
  		WaFxMFrameExt.m_last_height = -1;

  		var elems = Array.from(document.querySelectorAll("[class^='comp_']"));
  		var elems2 = Array.from(document.querySelectorAll(".wafxBanner"));
		if (elems2!=null)
		{
			elems = elems.concat(elems2);
		};


		[].forEach.call(elems, function(el) {

			WaFxNodeData.setData(el,"wafx_initial_y",null);
			el.style.top="";
		});

  	}
  	static init() 
  	{
		WaFxMFrameExt.m_last_height = -1;
  		WaFxMFrameExt.m_pool_time = 500;
  		document.addEventListener("DOMContentLoaded", function() 
		{
			WaFxMFrameExt.var_timer = setTimeout("WaFxMFrameExt.checkSizeFrame()", WaFxMFrameExt.m_pool_time);
		});
		
	}

	static checkSizeFrame() 
  	{

  		var wrapper = document.querySelector('.wafxWrapper_ecwid');

  		if (wrapper==null)
  		{
  			//alert("no ecwid")
  			return;
  		}
  		var rBound = WaFxNodeGeometry.boundingRect(wrapper);
  		var pos = WaFxNodeGeometry.globalPosition(wrapper);

  		var currentHeight = rBound.height / WaFxWindow.currentScreen().factor();
  		//	alert('check '+rBound.top+"  "+rBound.height)
  		if (WaFxMFrameExt.m_last_height  != currentHeight)
  		{
  			WaFxMFrameExt.m_last_height = currentHeight;


  			var elems = Array.from(document.querySelectorAll("[class^='comp_']"));
  			var elems2 = Array.from(document.querySelectorAll(".wafxBanner"));

//  			alert(elems2.length);
  			if (elems2!=null)
  			{
  				elems = elems.concat(elems2);

			  [].forEach.call(elems, function(el) {


			  		var wrapper_dummy  = el.querySelector('.wafxWrapper_ecwid');

			  		if (wrapper_dummy==null)
			  		{
			  			var pos_el = WaFxNodeGeometry.globalPosition(el);

						var initial_y = WaFxNodeData.getData(el,"wafx_initial_y");
						if (initial_y==null)
						{
							initial_y = pos_el.top;
							WaFxNodeData.setData(el,"wafx_initial_y",initial_y);
						}

						if (initial_y>pos.top)
						{
							var offset = (initial_y-pos.top);
							el.style.top=(pos.top + offset +WaFxMFrameExt.m_last_height)+"px";
						}
			  		}


			  		
				});
  			}
  		}

  		WaFxMFrameExt.var_timer = setTimeout("WaFxMFrameExt.checkSizeFrame()", WaFxMFrameExt.m_pool_time);
  	}
}