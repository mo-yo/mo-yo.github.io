// Created by Gregory EUSTACHE  © Intuisphere

class WaFTSearchProxy
{

    constructor(params)
    {
      this.m_search_params = params;


      this.m_input_selector = "#"+WaFtSearchGui.m_input_selector ;
      this.m_engine = null;
      this.m_old_value = "";
      this.m_search_timer = null;
    }

    checkInputChange (p_this)
    {

      var words = IntuisphereFtSearch.splitQuery(p_this.m_input.value);
      var words_string = words.join(' ');


      if (p_this.m_old_value!=words_string)
      {
        p_this.m_old_value = words_string;
        p_this.onChangeInput();

      //  p_this.m_search_params.input_source.value = words_string;

        //alert(p_this.m_search_params.input_source.value)
      }
    }

    onChangeInput ()
    {
      if (this.m_search_timer !=null)
      {
        clearTimeout(this.m_search_timer);
        this.m_search_timer = null;
      }
      this.m_search_timer =setTimeout(this.onDelayedSearch,300,this);
      //console.log('checkInputChange  = '+this.m_input.value);
    }

    init()
    {
      var p_this = this;
      this.m_input = document.querySelector(this.m_input_selector);

      setInterval(this.checkInputChange, 300,this);


      this.m_gui.insertResultHTML("")
    }


    onDelayedSearch(p_this)
    {
       p_this.search();
    }

    displayMessage(mess)
    {
    }
    hideMessage()
    {
    }

    displayWaiting()
    {
      this.m_gui.displayWaiting();
    }
    hideWaiting()
    {
      this.m_gui.hideWaiting();
    }

/*
    setMessageGui(b,html)
    {
    }
    */
    setGui(gui)
    {
      this.m_gui = gui;

      this.m_gui.m_search_params = this.m_search_params
    }

    setEngine(engine)
    {
      var p_this = this;
      this.m_engine = engine;
      this.m_engine.callback= function(res)
      {
          //
          if (res.success)
          {
      
              var url = window.location.href;
              const regex = /page=[0-9]*/gi;
              url = url.replace(regex,"page=0");
              history.replaceState({}, "", url)


              var context_search = res.context_search;

              var query = context_search.m_query;

              p_this.m_old_value = query;


              p_this.m_old_value = IntuisphereFtSearch.splitQuery(query).join(' ');;


              var new_input = p_this.m_input;

              var cursorStart = new_input.selectionStart;//conservation selectin
              var cursorEnd = new_input.selectionEnd;
              new_input.value = query;
              new_input.setSelectionRange(cursorStart, cursorEnd);
              
 // console.log("query="+query+"   p_this.m_input.value.length="+p_this.m_input.value.length)

              var nb_results = 0;
              if (p_this.m_input.value.length==0)
              {
                nb_results =p_this.loadCurrentpage(null,context_search)
              }
              else
              {
                nb_results =p_this.loadCurrentpage(res.search_results,context_search);
              }   
          }
          //p_this.setMessageGui(false);
          p_this.hideWaiting();

/*
          if (nb_results==0)
          {
            p_this.setMessageGui(true,trMessages.TR_NO_RESULT_FOUND);
          }
          */

      }
    }


    search()
    {
      var input = document.querySelector(this.m_input_selector);
      var query = input.value;

      var context_search = {
        'm_query':query,
        'm_page':0,
        'm_current_keyid':''
      };

      var words = IntuisphereFtSearch.splitQuery(query);
      if (words.length==0)
      {
        
        //this.setMessageGui(false);
        this.loadCurrentpage(null,context_search);
        
        return;
      }




      
      this.displayWaiting();
      this.m_engine.search(context_search);
    }


    loadCurrentpage(search_results,context_search)
    {
      this.m_gui.loadCurrentpage(search_results,context_search);
    }    
}





