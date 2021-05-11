<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index($title)
    {
        return view('index')
            ->with('post', Post::where('title', $title)->first());;
    }
}
