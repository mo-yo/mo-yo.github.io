
class WaFtSearchGui
{
    static init(params)
    {

      WaFtSearchGui.m_input_selector = "wafx-search-input-dlg";

      
      WaFtSearchGui.search_params = params;

      document.addEventListener("DOMContentLoaded", function() 
      {

        WaFtSearchGui.input_default = null;
        
        [].forEach.call(document.querySelectorAll('.wa-search-action'), function(el) {

            if ((el.tagName==="INPUT")&&((el.type==="search")||(el.type==="text")))
            {
                WaFtSearchGui.input_default = el; 
            }
        });

        [].forEach.call(document.querySelectorAll('.wa-search-action'), function(el) {

            if ((el.tagName==="INPUT")&& ((el.type==="search")||(el.type==="text")))
            {
              WaFtSearchGui.bindInputSearch(el);  
            }
            else
            {
              WaFtSearchGui.bindButton(el,WaFtSearchGui.input_default);
            }
        });
      });
    }

    static bindButton(but,input)
    { 
      but.addEventListener("click", function(event) {
            event.preventDefault();
            WaFtSearchGui.openDialog(input)
        });
    }

    static bindInputSearch(input)
    {
      input.addEventListener("keyup", function(event) {
          if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();

            WaFtSearchGui.openDialog(input)
          }
        });
    }

    static openDialog(input1)
    {
      if (input1==undefined)input1 = null;

      var modal = WaFtSearchGui.modal;

      if (modal==undefined)modal = null;
      
      if (modal!=null)
      {
        modal.close();
        modal.destroy();
      }

     
       modal = new tingle.modal({
          footer: false,
          stickyFooter: false,
          closeMethods: ['overlay', 'button', 'escape'],
          closeLabel: WaFtSearchGui.search_params.label_close,
          cssClass: ['wa-custom-tingle-dialog'],
          onOpen: function() {
              //console.log('modal open');
          },
          onClose: function() {
            if (input1!=null)
            {
                input1.focus();
            }
          },
          beforeClose: function() {
              // here's goes some logic
              // e.g. save content before closing the modal
              return true; // close the modal
              return false; // nothing happens
          }
      });
      WaFtSearchGui.modal = modal;

      var html = "";

      if (WaFtSearchGui.search_params.label_title.length>0)
      {
        html += "<div class='wa-default-tingle-title'>"+WaFtSearchGui.search_params.label_title+"</div>";
      }
      
      html += "<input type='search' class='wa-search-input-dlg' id='"+WaFtSearchGui.m_input_selector+"' placeholder=\""+WaFtSearchGui.search_params.label_search+"\">";
      html += "<br>"
      html += "<div id='wa-widget-search-results'></div>";
      modal.setContent(html);


      // 
      modal.open();




      var input2 = document.querySelector("#"+WaFtSearchGui.m_input_selector);
      WaFtSearchGui.openSearchDialog(input1,input2);
      if (input2!=null)
      {
        input2.focus();
      }
      




    }

    static openSearchDialog(input1,input2)
    {
      if (input1!=null)
      {
        input2.value = input1.value;
      }
      

      var param_search = WaFtSearchGui.search_params;
      param_search['input_source'] = input1;
      var proxy = new WaFTSearchProxy(param_search);
      var engine = new IntuisphereFtSearch(param_search);
      var gui = new WaFtSearchGui();

      proxy.setEngine(engine);
      proxy.setGui(gui);
      proxy.init();

      gui.insertResultHTML(gui.defaultResultMessage());

    //
    }

    displayWaiting()
    {
      this.insertResultHTML(this.formatedMessage("<div class='lds-ring'><div></div><div></div><div></div><div></div></div>"));
    }

    hideWaiting()
    {
    }

    insertResultHTML(html)
    {
        var node_results = document.querySelector("#wa-widget-search-results");
        node_results.innerHTML="<div class='wafxWow fadeIn'>"+html+"</div>";
    }

    formatedMessage(txt)
    {
        var html="";
        html +="<div class='wa-search-default-message'><div class='wa-search-default-message-txt'>";
        html +=txt;
        html +="</div></div>";
        return html;
    }

    defaultResultMessage()
    {
        return this.formatedMessage("");

        //return this.formatedMessage(this.m_search_params.label_please_fill_criterias);
    }

    loadCurrentpage(search_results,context_search)
    {

    //  console.log("loadCurrentpage="+search_results)

      var html = "";

      var b_has_result = false;
      if (search_results!=undefined)
      {
          for (var i=0;i<search_results.length;i++)
          {
            var obj = search_results[i];

            html +="<div class='wa-search-result-item'>";

            html +="<div class='top-url'><a href='"+obj.url+"'>"+obj.display_url+"</a></div>";
            html +="<div class='main-title'><a href='"+obj.url+"'>"+obj.title+"</a></div>";

            html +="</div>";

            b_has_result = true;
          }
      }
      if (b_has_result==false)
      {

          if (context_search.m_query.length>0)
          {
            html +=this.formatedMessage(this.m_search_params.label_no_results);
          }
          else
          {
            html = this.defaultResultMessage();
          }
      }



      this.insertResultHTML(html);


      WaFtSearchGui.modal.checkOverflow()
    }    
}


