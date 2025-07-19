<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return "Controller Index";
    }

    public function detail($id) {
        return "Controller detail - $id";
    }
}
