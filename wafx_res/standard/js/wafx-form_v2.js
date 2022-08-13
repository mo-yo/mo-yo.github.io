
document.wa_form_v2_flags = {};



class WafxFormV2InputFile
{
	static getLabelInputFile(el)
	{
		var node_label = el.parentNode.querySelector(".wafx-input-field-label");
		return node_label;
	}
	static getWrapperLabelInputFile(el)
	{
		var node_label = el.parentNode.querySelector(".wafx-input-field-label-wrap");
		return node_label;
	}
	static markState(el,b,b_override_text)
	{
		var node_label_wrap = WafxFormV2InputFile.getWrapperLabelInputFile(el);
		var node_label = WafxFormV2InputFile.getLabelInputFile(el);

		if (b_override_text)
		{
			node_label.innerHTML = node_label.dataset.labelPlaceholder;
		}
		
		if (b)
		{
			node_label.style.color="darkgray"
			node_label_wrap.style.backgroundColor="white";
		}
		else
		{
			el.value=""
			node_label.style.color="white"
			node_label_wrap.style.backgroundColor="red";
		}
	}


    static validate(el)
	{
 		if (el.type=="file")
 		{
 			var maxUpload = el.dataset.maxUpload;

 			var total_size = 0;
 			for (var i_file=0;i_file<el.files.length;i_file++)
 			{
 				var file = el.files[i_file];
				total_size += file.size;
 			}
 			if (total_size > maxUpload)
 			{
 				WafxFormV2InputFile.markState(el,false,true);
   				return false;
 			}
 			WafxFormV2InputFile.markState(el,true);
 		}
		return true;
	}
}

class WafxFormV2
{
    static clickFile(field)
	{
		var f = document.querySelector('input[name="'+field+'"]');
		f.click();
	}

	static changeInputFile(field)
	{
		setTimeout(function(){ 

			
				var f = document.querySelector('input[name="'+field+'"]');
				var txt = "";
			    for (var i = 0; i < f.files.length; i++)
			    {
			      	var file = f.files[i];
					txt +=file.name+" "
			 	}
			 	WafxFormV2InputFile.markState(f,true);
			 	var node_label = WafxFormV2InputFile.getLabelInputFile(f);
				node_label.innerHTML= txt;
				

		}, 300);

	}

	static alert(txt)
    {	
    	alert(txt)
    }
	static send(id_form)
    {	
        var b_valid = true;
    	var settings = WafxFormV2.m_map_settings[id_form];



    	var formData = new FormData();
    	formData.append("wafx_lang",WaPageContext.lang);

    	//formData.append("MAX_FILE_SIZE",1000);

	      var list_inputs = Array.from(document.querySelectorAll(".wafx-form-input[data-uuid-form='"+id_form+"']"));
	     // alert(list_images.length)
	      list_inputs.sort(function (a, b) 
	      {
	        if (a.tabIndex < b.tabIndex) return -1;
	        if (a.tabIndex > b.tabIndex) return 1;
	                  
	        return 0;
	      });

    	for (var el of list_inputs)
	     { 
	     	var name = el.getAttribute("name");
	     	{
	     		var valField ="";
	     		if (el.type=="file")
	     		{
	     			valField = el.files[0];

	     			if (WafxFormV2InputFile.validate(el)==false)
	     			{
		   				b_valid = false;
		   				break;
	     			}
	     		}
	     		else
	     		if (el.type=="radio")
	     		{
	     			if (el.checked) 
	     				{
	     					valField = el.value;
	     				}
	     		}
	     		else
	     		if (el.type=="checkbox")
	     		{
	     			valField = false;
	     			if (el.checked) valField = true;
	     		}
	     		else
	     		{
					valField = el.value;
	     		}

	   			if (el.checkValidity()==false)
	   			{
	   				el.reportValidity()
	   				b_valid = false;;
	   				break;
	   			}

   				if (formData.get(name)!=undefined)
   				{
   					if (valField.length == 0)
   					{
						valField = formData.get(name);
   					}
   				}
   				else
   				{
   					formData.set(name,valField);
   				}

   				//	alert("set "+name+"="+valField+"  "+el.checked)
				formData.set(name,valField);
	     	}
	     };

	     if ((settings.warning_message!=undefined)&&(settings.warning_message.length>0))
    	{
    		WafxFormV2.alert(settings.warning_message);
    		return;
    	}
	  //   alert(list_inputs.length+" "+JSON.stringify(formData))


	    if (b_valid==false)
	    {
	    	return;
	    }
	    
	    if (WaContext.preview)
    	{

    		
    		WafxFormV2.alert(settings.preview_message);
    		return;
    	}

	    var flag = document.wa_form_v2_flags[id_form];
	    if (flag==true)
	    {
	    	return;
	    }

		document.wa_form_v2_flags[id_form] = true;


    	for (var el of list_inputs)
	     { 
	     	var name = el.getAttribute("name");
	     	
     		var valField ="";
     		if (el.type=="radio")
     		{
     			el.checked = false;
     		}
     		else
     		if (el.type=="checkbox")
     		{
     			el.checked = false;
     		}
     		else
     		if (el.type=="select")
     		{
     			el.selectedIndex = -1;
     		}
     		else
     		if (el.type=="file")
     		{
     			el.value='';
     			WafxFormV2InputFile.markState(el,true,true);
     		}
     		else
     		{
				el.value='';
     		}
	     	
	     };
		
		fetch(settings.url, {
			method: "POST",
			body: formData
		})
		.then(function(response) {
		    return response.text();
		 })
		  .then(function(text) {
		  	
		    var json = JSON.parse(text);
		    if (json.success)
		    {
		    	var success_message = settings.success_message;
		    	if (success_message.length==0)success_message="Sent successfully !";
		    	WafxFormV2.alert(success_message)
		    }
		    else
		    {
		    	WafxFormV2.alert(json.message)
		    }

		    document.wa_form_v2_flags[id_form] = false;
		    //alert('Request successful='+text, text);

		  })
		  .catch(function(error) {
		    WafxFormV2.alert('Request failed', error);
		    document.wa_form_v2_flags[id_form] = false;
		  });
    }

	
	static init(map_settings)
    {
    	WafxFormV2.m_map_settings = map_settings;
	      //document.addEventListener("DOMContentLoaded", function() {});
    }
}
    