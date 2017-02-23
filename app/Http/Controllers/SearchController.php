<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;




class SearchController extends Controller
{
    public function searchPage(){
    	return view('search.searchpage');
    }

    public function searchRequest(SearchRequest $request, \ImdbSearcher $searcher){
    	$result = $searcher->searchFor($request->keyword, $request->type);
        if($request->type == 'person'){
            return view('search.results.name', ['result' => $result, 'type' => $request->type]);
        }
 		return view('search.results.movie', ['result' => $result, 'type' => $request->type]); 
    }

    public function idPage($id, $type, \ImdbSearcher $searcher){
    	$result = $searcher->searchById($id, $type); 
    	if ($type == 'person'){
    		return view('search.page.name', ['result' => $result]);
    	}else{
    		return view('search.page.movie', ['result' => $result]);
    	}
    }
}
