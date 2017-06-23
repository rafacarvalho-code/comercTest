<?php

namespace App\Http\Controllers;

use willvincent\Feeds\Facades\FeedsFacade;

class IndexController extends Controller
{
    public function index(){
        //carregando feeds na variavel
        $feed = FeedsFacade::make("http://www.comerc.com.br/siteen/rss.asp", 5);

        //carregando array para transportar informacoes dos feeds
        $data = [
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        ];

        return view("index")->with("feeds", $data);
    }
}