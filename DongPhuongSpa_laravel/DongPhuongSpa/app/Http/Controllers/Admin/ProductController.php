<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaProduct;
use App\Models\MispaProductLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{
    //
    public function GetAllProduct(){
        try{
            $list1=DB::table('mispa_product_language')->join('mispa_product','mispa_product_language.product_id','=','mispa_product.id')
                ->where('mispa_product_language.language_id',1)
                ->where('mispa_product.is_delete',0)->orderBy('mispa_product.updated_at','desc')
                ->select('mispa_product.*','mispa_product_language.name')
                ->get();
            $list2=DB::table('mispa_product_language')->join('mispa_product','mispa_product_language.product_id','=','mispa_product.id')
                ->where('mispa_product_language.language_id',2)
                ->where('mispa_product.is_delete',0)->orderBy('mispa_product.updated_at','desc')
                ->select('mispa_product.*','mispa_product_language.name')
                ->get();
            return view('admin.product.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateProduct(){
        try{
            return view('admin.product.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateProduct(Request $request){
        try{
            $product=new MispaProduct();
            $product->is_sale=$request->is_sale ? 1:0;
            $product->is_new=$request->is_new ? 1:0;
            $product->is_selling=$request->is_selling ? 1:0;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = 'product-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/product/'.$filename);
                Image::make($image->getRealPath())->resize(350, 350)->save($destinationPath);
                $product->image = $filename;

                $filename1 = 'product_thumbnail-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath1 = public_path('images/product/'.$filename1);
                Image::make($image->getRealPath())->resize(90, 90)->save($destinationPath1);
                $product->image_thumbnail = $filename1;
            }

            $product1=new MispaProductLanguage();
            $product1->name=$request->name_vi;
            $product1->description=$request->description_vi;
            $product1->info=$request->info_vi;
            $product1->language_id=1;

            $product2=new MispaProductLanguage();
            $product2->name=$request->name_en;
            $product2->description=$request->description_en;
            $product2->info=$request->info_en;
            $product2->language_id=2;

            $result=DB::transaction(function() use ($product, $product1, $product2){
                $product->save();

                $product1->product_id=$product->id;
                $product1->save();

                $product2->product_id=$product->id;
                $product2->save();
                return redirect('admin/product/list-product.html')->with('true','Thêm Sản phẩm thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailProduct($id){
        try{
            $product=MispaProduct::find($id);
            if($product){
                $product_vi=MispaProductLanguage::where('product_id',$id)->where('language_id',1)->first();
                $product_en=MispaProductLanguage::where('product_id',$id)->where('language_id',2)->first();
                return view('admin.product.detail',[
                    'product'=>$product,
                    'product_vi'=>$product_vi,
                    'product_en'=>$product_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Sản phẩm không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailProduct($id,Request $request){
        try{
            $product=MispaProduct::find($id);
            if($product){
                $product->is_sale=$request->is_sale ? 1:0;
                $product->is_new=$request->is_new ? 1:0;
                $product->is_selling=$request->is_selling ? 1:0;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'product-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/product/'.$filename);
                    Image::make($image->getRealPath())->resize(350, 350)->save($destinationPath);
                    $product->image = $filename;

                    $filename1 = 'product_thumbnail-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath1 = public_path('images/product/'.$filename1);
                    Image::make($image->getRealPath())->resize(90, 90)->save($destinationPath1);
                    $product->image_thumbnail = $filename1;
                }

                $product1=MispaProductLanguage::where('product_id',$id)->where('language_id',1)->first();
                $product1->name=$request->name_vi;
                $product1->description=$request->description_vi;
                $product1->info=$request->info_vi;

                $product2=MispaProductLanguage::where('product_id',$id)->where('language_id',2)->first();
                $product2->name=$request->name_en;
                $product2->description=$request->description_en;
                $product2->info=$request->info_en;

                $result=DB::transaction(function() use ($product, $product1, $product2){
                    $product->save();

                    $product1->save();

                    $product2->save();
                    return redirect()->back()->with('true','Cập nhật Sản phẩm thành công!');
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
    public function DeleteProduct($id){
        try{
            $product=DB::table('mispa_product_language')->join('mispa_product','mispa_product_language.product_id','=','mispa_product.id')
                ->where('mispa_product_language.language_id',1)
                ->where('mispa_product_language.product_id',$id)
                ->select('mispa_product.*','mispa_product_language.name')
                ->first();
            if($product){
                return view('admin.product.delete',['product'=>$product]);
            }else{
                return redirect()->back()->with(['false'=>'Sản phẩm không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveProduct($id){
        try{
            $product=MispaProduct::find($id);
            if($product){
                $product->is_delete=1;
                if($product->save())
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
