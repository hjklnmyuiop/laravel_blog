<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Down;
use App\Http\Model\DownCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class DownController extends CommonController
{
    //get.admin/down  全部下载列表
    public function index(){
        $down = new Down();
        $data = $down->orderBy('id','desc')->paginate(10);
        return view('admin.down.index',compact('data'));
    }
    //get.admin/article/create   添加文章
    public function create()
    {
        $data = (new DownCategory)->tree();
        return view('admin.article.add',compact('data'));
    }
    //get.admin/down/{down}/edit  编辑文章
    public function edit($id){
        $data = (new DownCategory)->tree();
        $field = Down::find($id);
        return view('admin.down.edit',compact('data','field'));
    }
    //put.admin/down/{down}    更新文章
    public function update($id)
    {
        $input = Input::except('_token','_method');
        $re = Down::where('id',$id)->update($input);
        if($re){
            return redirect('admin/down');
        }else{
            return back()->with('errors','下载更新失败，请稍后重试！');
        }
    }
}
