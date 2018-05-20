<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaInfoHome;
use App\Models\MispaReport;
use App\Models\MispaWorkTime;
use App\Models\MispaWorkTimeLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function getHome(){
        return view('admin.home');
    }
    public function GetAllReport(){
    try{
        $list=MispaReport::orderBy('sort_order','asc')->get();
        return view('admin.report.index',[
            'list'=>$list,
        ]);
    }catch (\Exception $e){
        dd($e);
    }
}
    public function DetailReport($id){
        try{
            $report=MispaReport::find($id);
            if($report){
                return view('admin.report.detail',['report'=>$report]);
            }else{
                return redirect()->back()->with(['false'=>'Report không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailReport($id, Request $request){
        try{
            $report=MispaReport::find($id);
            if($report){
                $report->name_vi=$request->name_vi;
                $report->name_en=$request->name_en;
                $report->number=$request->number;
                $report->sort_order=$request->sort_order;
                if($report->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật report thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật report thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Report không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    //info home
    public function GetAllInfo(){
        try{
            $list=MispaInfoHome::get();
            return view('admin.info.index',[
                'list'=>$list,
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailInfo($id){
        try{
            $info=MispaInfoHome::find($id);
            if($info){
                return view('admin.info.detail',['info'=>$info]);
            }else{
                return redirect()->back()->with(['false'=>'Info không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailInfo($id, Request $request){
        try{
            $report=MispaInfoHome::find($id);
            if($report){
                $report->name_vi=$request->name_vi;
                $report->name_en=$request->name_en;
                if($report->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật info thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật info thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Info không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }

    //work time
    public function GetAllWorkTime(){
        try{
            $list1=DB::table('mispa_work_time_language')->join('mispa_work_time','mispa_work_time_language.work_time_id','=','mispa_work_time.id')
                ->where('mispa_work_time_language.language_id',1)
                ->orderBy('mispa_work_time.updated_at','desc')
                ->select('mispa_work_time.*','mispa_work_time_language.name','mispa_work_time_language.time')
                ->get();
            $list2=DB::table('mispa_work_time_language')->join('mispa_work_time','mispa_work_time_language.work_time_id','=','mispa_work_time.id')
                ->where('mispa_work_time_language.language_id',2)
                ->orderBy('mispa_work_time.updated_at','desc')
                ->select('mispa_work_time.*','mispa_work_time_language.name','mispa_work_time_language.time')
                ->get();
            return view('admin.work_time.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateWorkTime(){
        try{
            return view('admin.work_time.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateWorkTime(Request $request){
        try{
            $work_time=new MispaWorkTime();

            $work_time1=new MispaWorkTimeLanguage();
            $work_time1->name=$request->name_vi;
            $work_time1->time=$request->time_vi;
            $work_time1->language_id=1;

            $work_time2=new MispaWorkTimeLanguage();
            $work_time2->name=$request->name_en;
            $work_time2->time=$request->time_en;
            $work_time2->language_id=2;

            $result=DB::transaction(function() use ($work_time, $work_time1, $work_time2){
                $work_time->save();

                $work_time1->work_time_id=$work_time->id;
                $work_time1->save();

                $work_time2->work_time_id=$work_time->id;
                $work_time2->save();
                return redirect('admin/work-time/list-work-time.html')->with('true','Thêm thời gian thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DetailWorkTime($id){
        try{
            $work_time=MispaWorkTime::find($id);
            if($work_time){
                $work_time_vi=MispaWorkTimeLanguage::where('work_time_id',$id)->where('language_id',1)->first();
                $work_time_en=MispaWorkTimeLanguage::where('work_time_id',$id)->where('language_id',2)->first();
                return view('admin.work_time.detail',[
                    'work_time'=>$work_time,
                    'work_time_vi'=>$work_time_vi,
                    'work_time_en'=>$work_time_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Thời gian không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailWorkTime($id, Request $request){
        try{
            $work_time=MispaWorkTime::find($id);
            if($work_time){
                $work_time1=MispaWorkTimeLanguage::where('work_time_id',$id)->where('language_id',1)->first();
                $work_time1->name=$request->name_vi;
                $work_time1->time=$request->time_vi;

                $work_time2=MispaWorkTimeLanguage::where('work_time_id',$id)->where('language_id',2)->first();
                $work_time2->name=$request->name_en;
                $work_time2->time=$request->time_en;

                $result=DB::transaction(function() use ($work_time1, $work_time2){

                    $work_time1->save();

                    $work_time2->save();
                    return redirect()->back()->with('true','Cập nhật thời gian thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'Thời gian không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DeleteWorkTime($id){
        try{
            $work_time=DB::table('mispa_work_time_language')->join('mispa_work_time','mispa_work_time_language.work_time_id','=','mispa_work_time.id')
                ->where('mispa_work_time_language.language_id',1)
                ->where('mispa_work_time_language.work_time_id',$id)
                ->select('mispa_work_time.*','mispa_work_time_language.name','mispa_work_time_language.time')
                ->first();
            if($work_time){
                return view('admin.work_time.delete',['work_time'=>$work_time]);
            }else{
                return redirect()->back()->with(['false'=>'Thời gian không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveWorkTime($id){
        try{
            $work_time=MispaWorkTime::find($id);
            if($work_time){
                if($work_time->delete())
                {
                    return redirect()->back()->with(['true'=>'Xóa Thời gian thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Thời gian thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Thời gian không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
