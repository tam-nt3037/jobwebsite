<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use DB; // if u want to use Query SQL

// fix error when migration isn't enough lenght
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

//        if(isset($id)){
//            $post_news = DB::table('post_news','type_work','recruiter','level_salary','languages_profile','qualification','level')
//                ->join('recruiter', 'post_news.id_account_recruiter', '=', 'recruiter.id_account_recruiter')
//                ->join('type_work', 'type_work.id', '=', 'post_news.id_type_work')
//                ->join('level_salary', 'level_salary.id', '=', 'post_news.id_level_salary')
//                ->join('languages_profile','languages_profile.id','=','post_news.id_languages_profile')
//                ->join('qualification','qualification.id','=','post_news.id_qualification')
//                ->join('level','level.id', '=', 'post_news.id_level')
//                ->select('post_news.*','recruiter.*', 'type_work.name_type_work',
//                    'level_salary.name_level_salary','languages_profile.name_languages_profile','qualification.name_qualification',
//                    'level.name_level')
//                ->where('post_news.id_posts', '=', $id)
//                ->get();
//        }else{
//            $post_news = DB::table('post_news','type_work','recruiter','level_salary','languages_profile','qualification','level')
//                ->join('recruiter', 'post_news.id_account_recruiter', '=', 'recruiter.id_account_recruiter')
//                ->join('type_work', 'type_work.id', '=', 'post_news.id_type_work')
//                ->join('level_salary', 'level_salary.id', '=', 'post_news.id_level_salary')
//                ->join('languages_profile','languages_profile.id','=','post_news.id_languages_profile')
//                ->join('qualification','qualification.id','=','post_news.id_qualification')
//                ->join('level','level.id', '=', 'post_news.id_level')
//                ->select('post_news.*','recruiter.*', 'type_work.name_type_work',
//                    'level_salary.name_level_salary','languages_profile.name_languages_profile','qualification.name_qualification',
//                    'level.name_level')
//                ->get();
//        }
//
//
//
//
//        $info_candidate = null;
//        if(!Auth::guest()) {
//            $info_candidate = DB::table('info_candidate', 'users')
//                ->join('users', 'info_candidate.id_users', '=', 'users.id')
//                ->select('info_candidate.*', 'users.*')
//                ->where('users.id', '=', auth()->user()->id)
//                ->get();
//        }
//        View::share('post_news', $post_news);
//        View::share('info_candidate',$info_candidate);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
