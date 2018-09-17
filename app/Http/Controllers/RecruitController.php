<?php

namespace App\Http\Controllers;

use App\Model\Post_News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecruitController extends Controller
{
    public function post_news(){

        $level_job = DB::select('SELECT * FROM level');

        $languages_profile = DB::select('SELECT * FROM languages_profile');

        // $benefits = DB::select('SELECT * FROM benefits');

        $fina = DB::select('SELECT name_job_category
                                   FROM job_category
                                   WHERE id_group_category = 1
                                   ORDER BY name_job_category DESC;');

        $tech = DB::select('SELECT name_job_category
                                   FROM job_category
                                   WHERE id_group_category = 2
                                   ORDER BY name_job_category DESC;');

        $front = DB::select('SELECT name_job_category
                                   FROM job_category
                                   WHERE id_group_category = 3
                                   ORDER BY name_job_category DESC;');

        $south = DB::select('SELECT name
                           FROM location
                           WHERE region = "South"
                           ORDER BY name DESC;');

        $north = DB::select('SELECT name
                           FROM location
                           WHERE region = "North"
                           ORDER BY name DESC;');

        $middle = DB::select('SELECT name
                           FROM location
                           WHERE region = "Middle"
                           ORDER BY name DESC;');

        $other = DB::select('SELECT name
                           FROM location
                           WHERE region = "Other"
                           ORDER BY name DESC;');

        $salary = DB::select('SELECT * FROM level_salary');

        $qualification = DB::select('SELECT * FROM qualification');

        $type_work = DB::select('SELECT * FROM type_work ');

        return view('recruit.post_news')
            ->with('level_job',$level_job)->with('languages_profile',$languages_profile)
            ->with('fina',$fina)->with('tech',$tech)->with('front',$front)
            ->with('south',$south)->with('north',$north)->with('middle',$middle)->with('other',$other)
            ->with('qualification',$qualification)->with('type_work',$type_work)
            ->with('salary',$salary);
        // return $south;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $job_title = $request->job_title;
        $number_recruits = $request->number_recruits;
        $id_level = $request->id_level;
        $id_type_work = $request->id_type_work;
        $id_level_salary = $request->id_level_salary;
        $name_job_category = $request->name_job_category;
        $location_work = $request->location_work;
        $description_work = $request->description_work;
        $require_work = $request->require_work;
        $skills = $request->skills;
        $year_experience = $request->year_experience;
        $gender = $request->gender;
        $id_languages_profile = $request->id_languages_profile;
        $require_profile = $request->require_profile;
        $id_qualification = $request->id_qualification;

        $post_news = new Post_News;
        $post_news->job_title = $job_title;
        $post_news->number_recruits = $number_recruits;
        $post_news->id_level = $id_level;
        $post_news->id_type_work = $id_type_work;
        $post_news->id_level_salary = $id_level_salary;
        $post_news->name_job_category = $name_job_category;
        $post_news->location_work = $location_work;
        $post_news->description_work = $description_work;
        $post_news->require_work = $require_work;
        $post_news->skills = $skills;
        $post_news->year_experience = $year_experience;
        $post_news->gender = $gender;
        $post_news->id_languages_profile = $id_languages_profile;
        $post_news->require_profile = $require_profile;
        $post_news->id_qualification = $id_qualification;
        $post_news->save();


        //return $name_job_category;
        return view('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
