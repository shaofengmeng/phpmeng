<?php

namespace App\Http\Controllers\Home;
use App\Add;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PublishController extends Controller
{
    public function jz(){
        session_start();
        $user_id='';
        $user_id=1;
        //显示用户详情 显示兼职类型
        $user=DB::select("select * from `user` where user_id='{$user_id}'");
        $category=DB::select("select * from category");
        //

        return  view('Home/Publish/jz',[
            'category'=>$category,
            'user'=>$user[0]
            ]);
    }
    public function sh(){
        $success=Session::get('success');


        return  view('Publish/sh',[
            'success'=>$success
        ]);
    }
    public function qx(Request $request){
        session_start();
        $id=$request->input('id');
//        unset($_SESSION['$id']);

    }
    public function add(Request $request){
        $user_id=1;
        $categorey_id=$request->input("categorey_id");
        $title=$request->input("title");
        $per=$request->input("per");
        $pay=$request->input("pay");
        $cycle=$request->input("cycle");
        $monney=$request->input("monney");
        $monney_style=$request->input("monney_style");
        $job_category=$request->input("job_category");
        $sex=$request->input("sex");
        $email=$request->input("email");
        $name=$request->input("name");
        $tel=$request->input("tel");
        $p=$request->input("p");
        $c=$request->input("c");
        $a=$request->input("a");
        $cat_detail=$request->input("cat_detail");
        $adress=$request->input("adress");

        $user_over_num=$request->input("user_over_num");

        $dosubmit=$request->input("dosubmit");
        if($request->isMethod('POST')) {
            if (isset($dosubmit)) {
                $validator=\Validator::make($request->input(),
//                    [
//                    'email'=>['required','regex1:/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/'],
//                    'name'=> 'nullable|required_if:u_gender,1|string|between:1,10',
//                    'tel'=>['required','regex2:/^1[3|4|5|7|8][0-9]{9}$/']
//                ],[
//                    'required'=>':attribute 不能为空',
//                    'nullable'=>':attribute 不能为空',
//                    'required_if'=>':attribute 长度不符合要求',
//                    'between'=>':attribute 长度不符合要求',
//                    'regex1'=>':attribute 不符合邮箱格式要求',
//                    'regex2'=>':attribute 不符合电话要求',
//                    'integer'=>':attribute 必须为整数',
//                ],[
//                        'email'=>'邮箱',
//                        'name'=>'用户名',
//                        'tel'=>'电话',
//                    ]
                [
                    'email'=>'required|'
                ],[
                    'required'=>':attribute 不能为空'
                ],[
                    'email'=>'用户名'
                ]

                );
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                }


                //福利
                $welfare = $request->input("welfare");
                if ($welfare) {
                    $cat_welfare = implode(",", $welfare);
                } else {
                    $cat_welfare = "";
                }
                //电话 短信报名
                $contact = $request->input("contact");
                if ($contact) {
                    $cat_appllication = implode(",", $contact);
                } else {
                    $cat_appllication = '';
                }

                //赋值新数组待添加
                $data['user_id']=$user_id;
                $data['category_id']=$categorey_id;
                $data['cat_title']= $title;
                $data['cat_number']= $per;
                $data['cat_cycle']= $cycle;
                $data['cat_pay']= $pay;
                $data['job_money']= $monney;
                $data['money_style']= $monney_style;
                $data['job_category']= $job_category;
                $data['cat_sex']= $sex;
                $data['cat_email']= $email;
                $data['cat_person']= $name;
                $data['cat_phone']= $tel;
                $data['cat_province']= $p;
                $data['cat_city']= $c;
                $data['cat_area']= $a;
                $data['cat_address']= $adress;
                $data['cat_welfare']= $cat_welfare;
                $data['cat_appllication']= $cat_appllication;
                $data['user_over_num']= intval($user_over_num)-1;
                $data['cat_detail']= $cat_detail;
                if(Add::create($data)){
                    return redirect("Publish/sh")->with('success','添加成功');
                }else{
                    return redirect()->back()->with('error','添加失败');
                }


            } else {
                return redirect()->back();
            }
        }



    }
}
