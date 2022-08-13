// Created by Gregory EUSTACHE  © Intuisphere


class IntuisphereFtSearch
{
    constructor(params)
    {
      this.m_restriction_keys = [];
      this.m_current_results = [];
      this.m_hash_database = params.hash_database;
      this.m_hash_js = params.hash_js;
      this.m_json_index = params.json_index;
      this.m_js_worker = params.js_worker;
      this.m_worker = null;
      this.callback = function() {

        //CALLBACK par defaut
        if (res.success)
        {
            console.log("DEFAULT "+res.search_results.join(" ; "));
        }
      };
    }


    static splitQuery(query)
    {
        var result = [];

        var PATTERN = /[^\x20\x2D0-9A-Z\x5Fa-z\xC0-\xD6\xD8-\xF6\xF8-\xFF]/g;
        query = query.replace(PATTERN, '');
        query = query.toLowerCase().trim();


        query = query.normalize("NFD").replace(/[\u0300-\u036f]/g, "")

        var words = query.split(' ');
        for (var n=0;n<words.length;n++)
        {
          var word = words[n].trim();
          if (word.length>0)
          {
            result.push(word);
          }
        }
        return result;
    }


    setRestrictionKeys(keys)
    {
      this.m_restriction_keys = keys;
    }
    results()
    {
      return this.m_current_results;
    }

    search(context_search)
    {

      var p_this = this;

      if (this.m_worker!==null)
      {
         // console.log('terminate worker');
          this.m_worker.terminate();
      }


      this.m_worker = new Worker(this.m_js_worker+"?"+this.m_hash_js);

      this.m_worker.onmessage = function(e) 
      {
        var res= e.data[0];

        p_this.m_current_results = res.search_results;
        p_this.then(res);
      }

      this.m_worker.postMessage([{"code":"init","param":
        {
          "json_index":this.m_json_index+"?"+this.m_hash_database,
          "restriction_keys":this.m_restriction_keys,
          "context_search":context_search
        }
      }]);
    }
    
    then(res)
    {
      this.callback(res);
    } 
}

IntuisphereFtSearch.OPERATOR_AND = 0;
IntuisphereFtSearch.OPERATOR_OR = 1;

