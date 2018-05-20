<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaPromotion;
use App\Models\MispaPromotionLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class PromotionController extends Controller
{
    //
    public function GetAllPromotion(){
        try{
            $list1=DB::table('mispa_promotion_language')->join('mispa_promotion','mispa_promotion_language.promotion_id','=','mispa_promotion.id')
                ->where('mispa_promotion_language.language_id',1)
                ->where('mispa_promotion.is_delete',0)->orderBy('mispa_promotion.updated_at','desc')
                ->select('mispa_promotion.*','mispa_promotion_language.title')
                ->get();
            $list2=DB::table('mispa_promotion_language')->join('mispa_promotion','mispa_promotion_language.promotion_id','=','mispa_promotion.id')
                ->where('mispa_promotion_language.language_id',2)
                ->where('mispa_promotion.is_delete',0)->orderBy('mispa_promotion.updated_at','desc')
                ->select('mispa_promotion.*','mispa_promotion_language.title')
                ->get();
            return view('admin.promotion.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreatePromotion(){
        try{
            return view('admin.promotion.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreatePromotion(Request $request){
        try{
            $promotion=new MispaPromotion();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = 'promotion-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/promotion/'.$filename);
                Image::make($image->getRealPath())->resize(300, 300)->save($destinationPath);
                $promotion->image = $filename;
            }

            $promotion1=new MispapromotionLanguage();
            $promotion1->title=$request->title_vi;
            $promotion1->description=$request->description_vi;
            $promotion1->language_id=1;

            $promotion2=new MispapromotionLanguage();
            $promotion2->title=$request->title_en;
            $promotion2->description=$request->description_en;
            $promotion2->language_id=2;

            $result=DB::transaction(function() use ($promotion, $promotion1, $promotion2){
                $promotion->save();

                $promotion1->promotion_id=$promotion->id;
                $promotion1->save();

                $promotion2->promotion_id=$promotion->id;
                $promotion2->save();
                return redirect('admin/promotion/list-promotion.html')->with('true','Thêm khuyến mãi thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailPromotion($id){
        try{
            $promotion=MispaPromotion::find($id);
            if($promotion){
                $promotion_vi=MispaPromotionLanguage::where('promotion_id',$id)->where('language_id',1)->first();
                $promotion_en=MispaPromotionLanguage::where('promotion_id',$id)->where('language_id',2)->first();
                return view('admin.promotion.detail',[
                    'promotion'=>$promotion,
                    'promotion_vi'=>$promotion_vi,
                    'promotion_en'=>$promotion_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Khuyến mãi không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailPromotion($id,Request $request){
        try{
            $promotion=MispaPromotion::find($id);
            if($promotion){
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'promotion-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/promotion/'.$filename);
                    Image::make($image->getRealPath())->resize(300, 300)->save($destinationPath);
                    $promotion->image = $filename;

                }

                $promotion1=MispaPromotionLanguage::where('promotion_id',$id)->where('language_id',1)->first();
                $promotion1->title=$request->title_vi;
                $promotion1->description=$request->description_vi;

                $promotion2=MispaPromotionLanguage::where('promotion_id',$id)->where('language_id',2)->first();
                $promotion2->title=$request->title_en;
                $promotion2->description=$request->description_en;

                $result=DB::transaction(function() use ($promotion, $promotion1, $promotion2){
                    $promotion->save();

                    $promotion1->save();

                    $promotion2->save();
                    return redirect()->back()->with('true','Cập nhật khuyến mãi thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'Khuyến mãi không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeletePromotion($id){
        try{
            $promotion=DB::table('mispa_promotion_language')->join('mispa_promotion','mispa_promotion_language.promotion_id','=','mispa_promotion.id')
                ->where('mispa_promotion_language.language_id',1)
                ->where('mispa_promotion_language.promotion_id',$id)
                ->select('mispa_promotion.*','mispa_promotion_language.title')
                ->first();
            if($promotion){
                return view('admin.promotion.delete',['promotion'=>$promotion]);
            }else{
                return redirect()->back()->with(['false'=>'Khuyến mãi không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemovePromotion($id){
        try{
            $promotion=MispaPromotion::find($id);
            if($promotion){
                $promotion->is_delete=1;
                if($promotion->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa khuyến mãi thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa khuyến mãi thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Khuyến mãi không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
