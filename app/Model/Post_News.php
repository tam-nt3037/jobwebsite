<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post_News extends Model
{

    // Table Name
    protected $table = 'post_news';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function account_recruiter()
{
    return $this->belongsTo('App\Model\Account_Recruiter');
}
    public function recruiter()
    {
        return $this->belongsTo('App\Model\Recruiter','id_account_recruiter','id');
    }
}
