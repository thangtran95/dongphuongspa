<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaNews;
use App\Models\MispaNewsLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class NewsController extends Controller
{
    //
    public function GetAllNews(){
        try{
            $list1=DB::table('mispa_news_language')->join('mispa_news','mispa_news_language.news_id','=','mispa_news.id')
                ->where('mispa_news_language.language_id',1)
                ->where('mispa_news.is_delete',0)->orderBy('mispa_news.updated_at','desc')
                ->select('mispa_news.*','mispa_news_language.title')
                ->get();
            $list2=DB::table('mispa_news_language')->join('mispa_news','mispa_news_language.news_id','=','mispa_news.id')
                ->where('mispa_news_language.language_id',2)
                ->where('mispa_news.is_delete',0)->orderBy('mispa_news.updated_at','desc')
                ->select('mispa_news.*','mispa_news_language.title')
                ->get();
            return view('admin.news.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateNews(){
        try{
            return view('admin.news.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateNews(Request $request){
        try{
            $news=new MispaNews();
            $news->is_featured=$request->is_featured ? 1:0;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = 'news-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/news/'.$filename);
                Image::make($image->getRealPath())->resize(600, 400)->save($destinationPath);
                $news->image = $filename;

                $filename1 = 'news_thumbnail-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath1 = public_path('images/news/'.$filename1);
                Image::make($image->getRealPath())->resize(150, 100)->save($destinationPath1);
                $news->image_thumbnail = $filename1;
            }

            $news1=new MispaNewsLanguage();
            $news1->title=$request->title_vi;
            $news1->description=$request->description_vi;
            $news1->language_id=1;

            $news2=new MispaNewsLanguage();
            $news2->title=$request->title_en;
            $news2->description=$request->description_en;
            $news2->language_id=2;

            $result=DB::transaction(function() use ($news, $news1, $news2){
                $news->save();

                $news1->news_id=$news->id;
                $news1->save();

                $news2->news_id=$news->id;
                $news2->save();
                return redirect('admin/news/list-news.html')->with('true','Thêm Tin tức thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailNews($id){
        try{
            $news=MispaNews::find($id);
            if($news){
                $news_vi=MispaNewsLanguage::where('news_id',$id)->where('language_id',1)->first();
                $news_en=MispaNewsLanguage::where('news_id',$id)->where('language_id',2)->first();
                return view('admin.news.detail',[
                    'news'=>$news,
                    'news_vi'=>$news_vi,
                    'news_en'=>$news_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Sản phẩm không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailNews($id,Request $request){
        try{
            $news=MispaNews::find($id);
            if($news){
                $news->is_featured=$request->is_featured ? 1:0;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'news-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/news/'.$filename);
                    Image::make($image->getRealPath())->resize(600, 400)->save($destinationPath);
                    $news->image = $filename;

                    $filename1 = 'news_thumbnail-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath1 = public_path('images/news/'.$filename1);
                    Image::make($image->getRealPath())->resize(150, 100)->save($destinationPath1);
                    $news->image_thumbnail = $filename1;
                }

                $news1=MispaNewsLanguage::where('news_id',$id)->where('language_id',1)->first();
                $news1->title=$request->title_vi;
                $news1->description=$request->description_vi;

                $news2=MispaNewsLanguage::where('news_id',$id)->where('language_id',2)->first();
                $news2->title=$request->title_en;
                $news2->description=$request->description_en;

                $result=DB::transaction(function() use ($news, $news1, $news2){
                    $news->save();

                    $news1->save();

                    $news2->save();
                    return redirect()->back()->with('true','Cập nhật Tin tức thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'Sản phẩm không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeleteNews($id){
        try{
            $news=DB::table('mispa_news_language')->join('mispa_news','mispa_news_language.news_id','=','mispa_news.id')
                ->where('mispa_news_language.language_id',1)
                ->where('mispa_news_language.news_id',$id)
                ->select('mispa_news.*','mispa_news_language.title')
                ->first();
            if($news){
                return view('admin.news.delete',['news'=>$news]);
            }else{
                return redirect()->back()->with(['false'=>'Tin tức không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveNews($id){
        try{
            $news=MispaNews::find($id);
            if($news){
                $news->is_delete=1;
                if($news->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa Sản phầm thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Sản phầm thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Sản phầm không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
