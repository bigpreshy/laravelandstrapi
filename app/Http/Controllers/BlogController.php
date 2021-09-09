<?php

namespace App\Http\Controllers;

use Dbfx\LaravelStrapi\LaravelStrapi;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $strapi = new LaravelStrapi();
        $blogs = $strapi->collection('blogs');
        // var_dump($blogs[0]['Title']);
        return view('blog', compact(['blogs']));
    }
}
