<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaListPrice;
use App\Models\MispaListPriceLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ListPriceController extends Controller
{
    //
    public function GetAllPrice(){
        try{
            $list1=DB::table('mispa_list_price_language')->join('mispa_list_price','mispa_list_price_language.list_price_id','=','mispa_list_price.id')
                ->where('mispa_list_price_language.language_id',1)
                ->where('mispa_list_price.is_delete',0)->orderBy('mispa_list_price.updated_at','desc')
                ->select('mispa_list_price.*','mispa_list_price_language.name','mispa_list_price_language.description')
                ->get();
            $list2=DB::table('mispa_list_price_language')->join('mispa_list_price','mispa_list_price_language.list_price_id','=','mispa_list_price.id')
                ->where('mispa_list_price_language.language_id',2)
                ->where('mispa_list_price.is_delete',0)->orderBy('mispa_list_price.updated_at','desc')
                ->select('mispa_list_price.*','mispa_list_price_language.name','mispa_list_price_language.description')
                ->get();
            return view('admin.list_price.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreatePrice(){
        try{
            return view('admin.list_price.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreatePrice(Request $request){
        try{

            $price=new MispaListPrice();
            $price->price=str_replace(',', '', $request->price);
            $price->is_new=$request->is_new ? 1:0;
            $price->time=$request->time;
            $price->is_delete=0;

            $price1=new MispaListPriceLanguage();
            $price1->name=$request->name_vi;
            $price1->description=$request->description_vi;
            $price1->language_id=1;

            $price2=new MispaListPriceLanguage();
            $price2->name=$request->name_en;
            $price2->description=$request->description_en;
            $price2->language_id=2;

            $result=DB::transaction(function() use ($price, $price1, $price2){
                $price->save();

                $price1->list_price_id=$price->id;
                $price1->save();

                $price2->list_price_id=$price->id;
                $price2->save();
                return redirect('admin/price/list-price.html')->with('true','Thêm Price thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailPrice($id){
        try{
            $price=MispaListPrice::find($id);
            if($price){
                $price_vi=MispaListPriceLanguage::where('list_price_id',$id)->where('language_id',1)->first();
                $price_en=MispaListPriceLanguage::where('list_price_id',$id)->where('language_id',2)->first();
                return view('admin.list_price.detail',[
                    'price'=>$price,
                    'price_vi'=>$price_vi,
                    'price_en'=>$price_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Price không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailPrice($id,Request $request){
        try{
            $price=MispaListPrice::find($id);
            if($price){
                $price->price=str_replace(',', '', $request->price);
                $price->is_new=$request->is_new? 1:0;
                $price->time=$request->time;

                $price1=MispaListPriceLanguage::where('list_price_id',$id)->where('language_id',1)->first();
                $price1->name=$request->name_vi;
                $price1->description=$request->description_vi;

                $price2=MispaListPriceLanguage::where('list_price_id',$id)->where('language_id',2)->first();
                $price2->name=$request->name_en;
                $price2->description=$request->description_en;
                $result=DB::transaction(function() use ($price, $price1, $price2){
                    $price->save();

                    $price1->save();

                    $price2->save();
                    return redirect()->back()->with('true','Cập nhật Price thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'Price không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeletePrice($id){
        try{
            $slide=DB::table('mispa_list_price_language')->join('mispa_list_price','mispa_list_price_language.list_price_id','=','mispa_list_price.id')
                ->where('mispa_list_price_language.language_id',1)
                ->where('mispa_list_price.id',$id)
                ->where('mispa_list_price.is_delete',0)->orderBy('mispa_list_price.updated_at','desc')
                ->select('mispa_list_price.*','mispa_list_price_language.name','mispa_list_price_language.description')
                ->first();
            if($slide){
                return view('admin.list_price.delete',['slide'=>$slide]);
            }else{
                return redirect()->back()->with(['false'=>'Price không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemovePrice($id){
        try{
            $price=MispaListPrice::find($id);
            if($price){
                $price->is_delete=1;
                if($price->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa Price thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Price thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Price không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
