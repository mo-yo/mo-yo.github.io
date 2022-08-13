// Created by Gregory EUSTACHE  © Intuisphere

importScripts('intuisphere_ft_search.js');  


onmessage = function(e) {

	var data = e.data[0];
	var code = data.code;
	var param = data.param;

  	var searchWorker = new SearchWorker(param);
	var res = searchWorker.loadJson()



  	postMessage([res]);
}



class SearchWorker
{
	constructor(param)
	{
		this.m_restriction_keys = param.restriction_keys
		this.m_json_index = param.json_index

//console.log('context_search='+param.context_search);
		this.m_context_search = param.context_search;
		this.m_query = this.m_context_search.m_query;
	}

	loadJson()
	{
		var p_this = this;
		var result = {"success":false,"search_results":[]};
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var json_datas = JSON.parse(this.responseText);
		        result.search_results = p_this.doSearch(json_datas);
		        result.success = true;
		    }
		};

		xmlhttp.onerror = function () {
			//alert('error occured !')
  			console.log("** An error occurred during the search json loading");
		};
		xmlhttp.open("GET", this.m_json_index, false);//async = false
		xmlhttp.send();
		/*
		result.forced_page = this.m_forced_page;
		result.query = this.m_query;
		*/
		result.context_search = this.m_context_search;
		return result;
	}

	doSearch(json_datas)
	{

		var b_slow = false;
		//alert('do serach')
		if (b_slow)
		{
			for (var i0=0;i0<4;i0++)
			{
				var nb = 100*1000000;
				for (var i1=0;i1<nb;i1++){}
			}
		}


	
		var op = IntuisphereFtSearch.OPERATOR_AND;

		var words = IntuisphereFtSearch.splitQuery(this.m_query);

		var arrayFinal = [];
		for (var n=0;n<words.length;n++)
		{
			var word = words[n].trim();
			if (word.length>0)
			{
				var results2 = [];
				var results = this.doSearchWithWord(json_datas,word);
				for (var i=0;i<results.length;i++)
				{
					var ind = results[i];

					var arr = json_datas.index_words[ind];
					results2 = results2.concat(arr);
				}
				var unique_results2 = Array.from( new Set(results2) );

				if (op==IntuisphereFtSearch.OPERATOR_AND)
				{
					// AND
					if (n==0)
					{
						arrayFinal = unique_results2;
					}
					else
					{
						arrayFinal =  arrayFinal.filter(value => unique_results2.includes(value));
					}
				}
				else
				{	
					//OR
					arrayFinal = arrayFinal.concat(unique_results2);
				}
			}
		}
		if (op==IntuisphereFtSearch.OPERATOR_OR)
		{
			arrayFinal = Array.from( new Set(arrayFinal) );
		}
		var arrFinalKeys = [];
		for (var n2=0;n2<arrayFinal.length;n2++)
		{
			arrFinalKeys.push(json_datas.map_targets[arrayFinal[n2]]);
		}
		if (this.m_restriction_keys.length>0)
		{
			arrFinalKeys =  arrFinalKeys.filter(value => this.m_restriction_keys.includes(value));
		}
		return arrFinalKeys;
	}

	internal_almostMatch(w1,w2)
	{
		var len1 = w1.length;
		var len2 = w2.length;
		var diff = Math.abs(len1-len2);
		if (diff<3)
		{
			var lenMin = Math.min(len1,len2);
			if (lenMin>2)
			{
				w1 = w1.substring(0,lenMin);
				w2 = w2.substring(0,lenMin);
				if (w1 == w2)
				{
					return true;
				}
			}

		}

		return false;
	}

	internal_compareWord(w1,w2,cmp)
	{
		if (cmp==SearchWorker.CMP_EXACT_MATCH)
		{
			return w1==w2;
		}
		if (cmp==SearchWorker.CMP_STARTS_WITH)
		{
			return w1.startsWith(w2);
		}
		return false;
	}


	internal_CreateSearchResultsWithWord(json_datas,word,cmp)
	{
		var results = [];
		var map_words = json_datas.map_words;
		for (var i=0;i<map_words.length;i++)
		{
			var w = map_words[i];
			if (this.internal_compareWord(w,word,cmp))
			{
				results.push(i);
			}
		}
		return results;
	}


	doSearchWithWord(json_datas,word)
	{
		var results1 = this.internal_CreateSearchResultsWithWord(json_datas,word,SearchWorker.CMP_EXACT_MATCH);
		var results2 = this.internal_CreateSearchResultsWithWord(json_datas,word,SearchWorker.CMP_STARTS_WITH);

		results1 = Array.from(new Set(results1.concat(results2)));

		return results1;
	}
}


/////
SearchWorker.CMP_ALMOST_MATCH = 1;
SearchWorker.CMP_EXACT_MATCH = 2;
SearchWorker.CMP_STARTS_WITH = 3;
