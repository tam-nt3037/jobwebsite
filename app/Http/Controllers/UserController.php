<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; // if u want to use Query SQL

class UserController extends Controller
{
    public function index(){

        $post_news = DB::select('SELECT * FROM post_news');
        return view('user.index')->with('post_news', $post_news);
    }
    public function about(){
        return view('user.about');
    }
    public function blog(){
        return view('user.blog');
    }
    public function category(){
        return view('user.category');
    }
    public function contact(){
        return view('user.contact');
    }
    public function search(){
        return view('user.search');
    }
    public function details(){
        return view('user.details');
    }
}
