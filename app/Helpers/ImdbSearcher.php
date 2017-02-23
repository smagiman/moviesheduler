<?php

namespace App\Helpers;

use GuzzleHttp\Client as Client;
use GuzzleHttp\Psr7\Request;

class ImdbSearcher
{
    public $apikey;
    public $client;

    public function __construct(string $api){
        $this->apikey = $api;
        $this->client = new Client(['base_uri' => 'http://api.themoviedb.org']);
    }

    public function goSearch($url){
        $response = $this->client->get($url);
        $response = json_decode($response->getBody());
        return $response;
    }

    public function searchById($id, $type){
        $id = urlencode($id);
        $type = urlencode($type);
        //https://api.themoviedb.org/3/person/287?api_key=7276dafd1190f835c95ff6650719bc58
        $url = "3/{$type}/{$id}?api_key={$this->apikey}";
        $response = $this->goSearch($url);
        return $response;
    }

	public function searchFor($keyword, $type){
    	$keyword = urlencode($keyword);
    	$url = "/3/search/{$type}?api_key={$this->apikey}&query={$keyword}";
    	$response = $this->goSearch($url);
        return $response->results;
    }
    

}