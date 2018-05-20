<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaAboutUs;
use App\Models\MispaAboutUsLanguage;
use App\Models\MispaBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class AboutController extends Controller
{
    //
    public function GetAllAbout(){
        try{
            $list1=DB::table('mispa_about_us_language')->join('mispa_about_us','mispa_about_us_language.about_us_id','=','mispa_about_us.id')
                ->where('mispa_about_us_language.language_id',1)
                ->where('mispa_about_us.id',1)
                ->select('mispa_about_us.*','mispa_about_us_language.name','mispa_about_us_language.description')
                ->get();
            $list2=DB::table('mispa_about_us_language')->join('mispa_about_us','mispa_about_us_language.about_us_id','=','mispa_about_us.id')
                ->where('mispa_about_us_language.language_id',2)
                ->where('mispa_about_us.id',1)
                ->select('mispa_about_us.*','mispa_about_us_language.name','mispa_about_us_language.description')
                ->get();
            return view('admin.about.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailAbout(){
        try{
            $about=MispaAboutUs::find(1);
            if($about){
                $about_vi=MispaAboutUsLanguage::where('about_us_id',1)->where('language_id',1)->first();
                $about_en=MispaAboutUsLanguage::where('about_us_id',1)->where('language_id',2)->first();
                return view('admin.about.detail',[
                    'about'=>$about,
                    'about_vi'=>$about_vi,
                    'about_en'=>$about_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'About không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailAbout(Request $request){
        try{
            $about=MispaAboutUs::find(1);
            if($about){
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'about-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/about/'.$filename);
                    Image::make($image->getRealPath())->save($destinationPath);
                    $about->image = $filename;
                }

                $about1=MispaAboutUsLanguage::where('about_us_id',1)->where('language_id',1)->first();
                $about1->name=$request->name_vi;
                $about1->description=$request->description_vi;
                $about1->info=$request->info_vi;

                $about2=MispaAboutUsLanguage::where('about_us_id',1)->where('language_id',2)->first();
                $about2->name=$request->name_en;
                $about2->description=$request->description_en;
                $about2->info=$request->info_en;

                $result=DB::transaction(function() use ($about, $about1, $about2){
                    $about->save();

                    $about1->save();

                    $about2->save();
                    return redirect()->back()->with('true','Cập nhật about thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'about không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    //Q&A
    public function GetAllQA(){
        try{
            $list1=DB::table('mispa_about_us_language')->join('mispa_about_us','mispa_about_us_language.about_us_id','=','mispa_about_us.id')
                ->where('mispa_about_us_language.language_id',1)
                ->where('mispa_about_us.id',2)
                ->select('mispa_about_us.*','mispa_about_us_language.name','mispa_about_us_language.info')
                ->get();
            $list2=DB::table('mispa_about_us_language')->join('mispa_about_us','mispa_about_us_language.about_us_id','=','mispa_about_us.id')
                ->where('mispa_about_us_language.language_id',2)
                ->where('mispa_about_us.id',2)
                ->select('mispa_about_us.*','mispa_about_us_language.name','mispa_about_us_language.info')
                ->get();
            return view('admin.QA.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailQA(){
        try{
            $qa=MispaAboutUs::find(2);
            if($qa){
                $qa_vi=MispaAboutUsLanguage::where('about_us_id',2)->where('language_id',1)->first();
                $qa_en=MispaAboutUsLanguage::where('about_us_id',2)->where('language_id',2)->first();
                return view('admin.QA.detail',[
                    'qa'=>$qa,
                    'qa_vi'=>$qa_vi,
                    'qa_en'=>$qa_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'QA không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailQA(Request $request){
        try{
            $qa=MispaAboutUs::find(2);
            if($qa){
                $qa1=MispaAboutUsLanguage::where('about_us_id',2)->where('language_id',1)->first();
                $qa1->name=$request->name_vi;
                $qa1->description="";
                $qa1->info=$request->info_vi;

                $qa2=MispaAboutUsLanguage::where('about_us_id',2)->where('language_id',2)->first();
                $qa2->name=$request->name_en;
                $qa2->description='';
                $qa2->info=$request->info_en;

                $result=DB::transaction(function() use ($qa, $qa1, $qa2){
                    $qa->save();

                    $qa1->save();

                    $qa2->save();
                    return redirect()->back()->with('true','Cập nhật about thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'about không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }


    //banner
    public function GetAllBanner(){
        try{
            $list=MispaBanner::orderBy('updated_at','desc')->get();
            return view('admin.banner.index',[
                'list'=>$list
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailBanner($id){
        try{
            $banner=MispaBanner::find($id);
            if($banner){
                return view('admin.banner.detail',[
                    'banner'=>$banner,
                ]);
            }else{
                return redirect()->back()->with(['false'=>'About không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailBanner($id,Request $request){
        try{
            $banner=MispaBanner::find($id);
            if($banner){
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'banner-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/banner/'.$filename);
                    Image::make($image->getRealPath())->save($destinationPath);
                    $banner->image = $filename;
                }
                $banner->name_vi=$request->name_vi;
                $banner->name_en=$request->name_en;
                $banner->save();
                return redirect()->back()->with('true','Cập nhật about thành công!');
            }else{
                return redirect()->back()->with(['false'=>'about không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
}
