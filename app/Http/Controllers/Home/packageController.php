<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\package_addRequest;
use DB;

class packageController extends Controller
{
    public function index()
    {
        return view('Home.package');
    }

    public function add()
    {
        return view('Home.package_add');
    }

    public function insert(package_addRequest $request)
    {
        // dd($request->all());
        date_default_timezone_set('Asia/Shanghai');
        $img1=$this->upload($request, 'img1');
        $img2=$this->upload($request, 'img2');
        $img3=$this->upload($request, 'img3');

        $package = DB::table('package')->insert([
        'aid'=>session('user_id'),
        'title'=>$request->input('title'),
        'nav'=>$request->input('nav'),
        'server'=>$request->input('server'),
        'phone'=>$request->input('phone'),
        'website'=>$request->input('website'),
        'email'=>$request->input('email'),
        'address'=>$request->input('address'),
        'company'=>$request->input('company'),
        'img1'=>$img1,
        'img2'=>$img2,
        'img3'=>$img3,
        'state'=>0,
        'time'=>date('Y-m-d H:i:s'),
        'number'=>'0',
      ]);
    }

    public function Upload($request, $name)
    {
        // dd($request->all());
        date_default_timezone_set('Asia/Shanghai');
        //检测是否有文件上传
        if ($request->hasFile($name)) {
            //随机文件名
            $n = md5(rand(1, 99999).time());
            $suffix = $request->file($name)->getClientOriginalExtension();
            $path = "./uploads/".date('Y-m-d').'/';
            $fileName = $n.'.'.$suffix;
            $arr = array('jpg','png','jpeg');
            if (!in_array($suffix, $arr)) {
                return back()->with('error', '文件类型不符合');
            }

            $img = $this->isimage($request, $name);
            // dd($img);
            $a = imagejpeg($img,$path.$fileName);
            //1,移动的目标目录  2,文件名字
            // $request->file($name)->move('./uploads/'.date('Y-m-d'), $fileName);
            return $path.$fileName;
        }
        //echo '上传成功';
    }

    public function isimage($request,$imgpath)
    {
      $mime_type = getimagesize($request->file($imgpath));
      if($mime_type['mime']=="image/gif"){
        $img = imagecreatefromgif($_FILES[$imgpath]['tmp_name']);
      }elseif($mime_type['mime']=="image/png"||$mime_type['mime']=="image/x-png"){
        $img = imagecreatefrompng($_FILES[$imgpath]['tmp_name']);
      }else{
        $img = imagecreatefromjpeg($_FILES[$imgpath]['tmp_name']);
      }
      if($img == false){
        return false;
      }else{
        return $img;
      }
    }
}
