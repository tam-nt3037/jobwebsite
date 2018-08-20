<?php

namespace App\Http\Controllers;

use App\Model\Info_candidate;
use App\Model\Recruiter;
use App\Model\Status_candidate_profile;
use Illuminate\Http\Request;
use DB; // if u want to use Query SQL
use App\Model\Post_News;
use App\Model\Account_Recruiter;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        $post_news_by_date = DB::table('post_news','type_work','recruiter','level_salary','languages_profile','qualification','level')
            ->join('recruiter', 'post_news.id_account_recruiter', '=', 'recruiter.id_account_recruiter')
            ->join('type_work', 'type_work.id', '=', 'post_news.id_type_work')
            ->join('level_salary', 'level_salary.id', '=', 'post_news.id_level_salary')
            ->join('languages_profile','languages_profile.id','=','post_news.id_languages_profile')
            ->join('qualification','qualification.id','=','post_news.id_qualification')
            ->join('level','level.id', '=', 'post_news.id_level')
            ->select('post_news.*','recruiter.*', 'type_work.name_type_work',
                'level_salary.name_level_salary','languages_profile.name_languages_profile','qualification.name_qualification',
                'level.name_level')
            ->orderBy('time_for_submission','DESC')
            ->get();

        return view('user.index')
            ->with('post_news_by_date', $post_news_by_date);

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
            ->select('post_news.*','recruiter.*', 'type_work.name_type_work',
                'level_salary.name_level_salary','languages_profile.name_languages_profile','qualification.name_qualification',
                'level.name_level')
            ->where('post_news.id_posts', '=', $id)
            ->get();

        $info_candidate = null;
        if(!Auth::guest()){
            $info_candidate = DB::table('info_candidate','users')
                ->join('users','info_candidate.id_users', '=', 'users.id')
                ->select('info_candidate.*','users.*')
                ->where('users.id', '=', auth()->user()->id)
                ->get();
        }


        return view('user.details')
            ->with('post_news', $post_news)
            ->with('info_candidate', $info_candidate);
    }

    public function applyJob(Request $request){

        $this->validate($request,[
           'fileToUpload' => 'required|max:1999|mimes:doc,pdf,docx,zip'
        ]);

        $id_candidate = null;
        if ($request->file('fileToUpload')->isValid()) {

            if(!Auth::guest()) {

                //Handle File Upload
                $fileUpload = $request->file('fileToUpload');
                //File Name with the extension
                $fileNameWithExt = $fileUpload->getClientOriginalName();
                //Get just filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $fileUpload->getClientOriginalExtension();
                //FileName to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                //Upload file
                $path = $request->file('fileToUpload')->storeAs('public/cv', $fileNameToStore);


                $id_account_recruiter = $request->input('id_account_recruiter');
                $id_candidate = auth()->user()->id;
                $id_post = $request->input('id_post');
                $status_profile = "Waiting";

                //Create Status_candidate_profile
                $status_candidate_profile = new Status_candidate_profile;
                $status_candidate_profile->id_account_recruiter = $id_account_recruiter;
                $status_candidate_profile->id_candidate = $id_candidate;
                $status_candidate_profile->id_post_news = $id_post;
                $status_candidate_profile->status_profile = $status_profile;
                $status_candidate_profile->save();

                //Create Info_candidate
                $info_candidate = Info_candidate::find($id_candidate);
                $info_candidate->cv = $fileNameToStore;
                $info_candidate->datetime_upload_cv = now();
                $info_candidate->save();

                return back()->with('success','Apply Job Successfully ! ');
            }
        }
        else {
            return back()->with('error','Apply Job Error !!! ');
        }

        return back();
    }
}
