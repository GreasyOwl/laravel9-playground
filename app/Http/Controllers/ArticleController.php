<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1],
            ['id' => 2]
        ]);
    }
}
