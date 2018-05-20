<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaSlide;
use App\Models\MispaSlideLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class SlideController extends Controller
{
    //
    public function GetAllSlide(){
        try{
            $list1=DB::table('mispa_slide_language')->join('mispa_slide','mispa_slide_language.slide_id','=','mispa_slide.id')
                ->where('mispa_slide_language.language_id',1)
                ->where('mispa_slide.is_delete',0)->orderBy('mispa_slide.updated_at','desc')
                ->select('mispa_slide.*','mispa_slide_language.name')
                ->get();
            $list2=DB::table('mispa_slide_language')->join('mispa_slide','mispa_slide_language.slide_id','=','mispa_slide.id')
                ->where('mispa_slide_language.language_id',2)
                ->where('mispa_slide.is_delete',0)->orderBy('mispa_slide.updated_at','desc')
                ->select('mispa_slide.*','mispa_slide_language.name')
                ->get();
            return view('admin.slide.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateSlide(){
        try{
            return view('admin.slide.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateSlide(Request $request){
        try{

            $slide=new MispaSlide();
            $slide->status=(int)$request->status;
            $slide->link=$request->link;
            $slide->is_delete=0;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = 'slide-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/slide/'.$filename);
                Image::make($image->getRealPath())->save($destinationPath);
                $slide->image = $filename;
            }
            $slide1=new MispaSlideLanguage();
            $slide1->name=$request->name_vi;
            $slide1->language_id=1;

            $slide2=new MispaSlideLanguage();
            $slide2->name=$request->name_en;
            $slide2->language_id=2;

            $result=DB::transaction(function() use ($slide, $slide1, $slide2){
                $slide->save();

                $slide1->slide_id=$slide->id;
                $slide1->save();

                $slide2->slide_id=$slide->id;
                $slide2->save();
                return redirect('admin/slide/list-slide.html')->with('true','Thêm Slide thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailSlide($id){
        try{
            $slide=MispaSlide::find($id);
            if($slide){
                $slide_vi=MispaSlideLanguage::where('slide_id',$id)->where('language_id',1)->first();
                $slide_en=MispaSlideLanguage::where('slide_id',$id)->where('language_id',2)->first();
                return view('admin.slide.detail',[
                    'slide'=>$slide,
                    'slide_vi'=>$slide_vi,
                    'slide_en'=>$slide_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Slide không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailSlide($id,Request $request){
        try{
            $slide=MispaSlide::find($id);
            if($slide){
                $slide->status=$request->status;
                $slide->link=$request->link;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'slide-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/slide/'.$filename);
                    Image::make($image->getRealPath())->save($destinationPath);
                    $slide->image = $filename;
                }

                $slide1=MispaSlideLanguage::where('slide_id',$id)->where('language_id',1)->first();
                $slide1->name=$request->name_vi;

                $slide2=MispaSlideLanguage::where('slide_id',$id)->where('language_id',2)->first();
                $slide2->name=$request->name_en;
                $result=DB::transaction(function() use ($slide, $slide1, $slide2){
                    $slide->save();

                    $slide1->save();

                    $slide2->save();
                    return redirect()->back()->with('true','Cập nhật Slide thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'Slide không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeleteSlide($id){
        try{
            $slide=DB::table('mispa_slide_language')->join('mispa_slide','mispa_slide_language.slide_id','=','mispa_slide.id')
                ->where('mispa_slide_language.language_id',1)
                ->where('mispa_slide_language.slide_id',$id)
                ->select('mispa_slide.*','mispa_slide_language.name')
                ->first();
            if($slide){
                return view('admin.slide.delete',['slide'=>$slide]);
            }else{
                return redirect()->back()->with(['false'=>'Slide không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveSlide($id){
        try{
            $slide=MispaSlide::find($id);
            if($slide){
                $slide->is_delete=1;
                if($slide->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa Slide thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Slide thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Slide không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
