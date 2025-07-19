<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $data = [
            ["title" => "Article Title One"],
            ["title" => "Two Title Two"]
        ];
        return view("articles.index",[ "articles" => $data]);

    }

    public function detail($id) {
        return "Controller detail - $id";
    }
}
