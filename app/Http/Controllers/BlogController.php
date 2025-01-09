<?php

namespace App\Http\Controllers;
use App\Module\ShareData;

class BlogController extends Controller
{
    //首頁
    public function indexPage()
    {
        $name = 'home';
        $binding = [
            'title' => ShareData::TITLE,
            'name' => $name,
        ];
        return view('home', $binding);
    }
}
