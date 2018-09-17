<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Cat extends Model
{

    protected $table = "cat";   //table设置为admin表
    protected $primaryKey = "cat_id";
    public $timestamps = true;// false是关闭updated_at和created_at的自动维护

    protected $fillable = ['user_id', 'cat_title','cat_number','category_id','cat_cycle','cat_pay','cat_type','cat_jobtime','cat_per','cat_sex','cat_welfare','cat_detail','cat_email','cat_person','cat_phone','cat_province','cat_city','cat_city','cat_area','cat_address','cat_appllication','cat_browse','cat_appllication','money_style','job_money','job_category','jod_description','user_over_num',];


    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }




}