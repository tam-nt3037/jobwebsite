<?php

namespace App\Http\Controllers;

use App\Model\Recruiter;
use Illuminate\Http\Request;
use DB; // if u want to use Query SQL
use App\Model\Post_News;
use App\Model\Account_Recruiter;

class UserController extends Controller
{
    public function index(){

//        $post_news = DB::select('SELECT * FROM post_news');
//        $test = DB::select('SELECT * FROM test');
//        return view('user.index')->with('post_news', $post_news);
//        return $post_news;
//        return view('user.index')->with('post_news', $post_news)->with('test', $test);


        //$recruiter_id = Account_Recruiter::find(2)->id;

        //$post_news = Post_News::with('recruiter')->get();
//        $recruiter = Recruiter::all();
//        return view('user.index')->with('post_news', $post_news)->with('recruiter', $recruiter);
//   return view('user.index')->with('post_news', $post_news);

        $post_news = DB::select('SELECT * FROM level_salary,type_work,recruiter,post_news 
                                  WHERE post_news.id_account_recruiter=recruiter.id_account_recruiter
                                  AND type_work.id=post_news.id_type_work
                                  AND level_salary.id=post_news.id_level_salary
                                  ');
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
    public function details($id){

        $post_news = DB::table('post_news','type_work','recruiter','level_salary','languages_profile','qualification','level')
            ->join('recruiter', 'post_news.id_account_recruiter', '=', 'recruiter.id_account_recruiter')
            ->join('type_work', 'type_work.id', '=', 'post_news.id_type_work')
            ->join('level_salary', 'level_salary.id', '=', 'post_news.id_level_salary')
            ->join('languages_profile','languages_profile.id','=','post_news.id_languages_profile')
            ->join('qualification','qualification.id','=','post_news.id_qualification')
            ->join('level','level.id', '=', 'post_news.id_level')
            ->select('post_news.*','recruiter.*', 'type_work.name_type_work', 'level_salary.name_level_salary','languages_profile.name_languages_profile','qualification.name_qualification','level.name_level')
            ->where('post_news.id', '=', $id)
            ->get();
        return view('user.details')->with('post_news', $post_news);
    }
}
