<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaSocial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MispaMenu;

class MenuController extends Controller
{
    //
    public function GetAllMenu(){
        try{
            $list=MispaMenu::where('parent_id',0)->orderBy('sort_order','asc')->get();
            return view('admin.menu.index',[
                'list'=>$list,
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailMenu($id){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                $list=MispaMenu::where('parent_id',$id)->orderBy('updated_at','desc')->get();
                return view('admin.menu.detail',['menu'=>$menu,'list'=>$list]);
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailMenu($id, Request $request){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                $menu->name_vi=$request->name_vi;
                $menu->name_en=$request->name_en;
                $menu->sort_order=$request->sort_order;
                $menu->link=$request->link;
                if($menu->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật Menu thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật Menu thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }


    public function CreateSubMenu($id){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                return view('admin.menu.add_menu',[
                    'menu'=>$menu
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }

        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateSubMenu($id, Request $request){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                $sub=new MispaMenu();
                $sub->name_vi=$request->name_vi;
                $sub->name_en=$request->name_en;
                $sub->parent_id=$id;
                $sub->is_sub=0;
                $sub->sort_order=0;
                $sub->link='#';
                $sub->save();
                return redirect()->back()->with('true','Thêm Sub menu thành công!');
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DetailSubMenu($id){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                return view('admin.menu.edit_menu',['menu'=>$menu]);
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailSubMenu($id, Request $request){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                $menu->name_vi=$request->name_vi;
                $menu->name_en=$request->name_en;
                if($menu->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật Menu thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật Menu thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DeleteMenu($id){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                return view('admin.menu.delete',['menu'=>$menu]);
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveMenu($id){
        try{
            $menu=MispaMenu::find($id);
            if($menu){
                if($menu->delete())
                {
                    return redirect()->back()->with(['true'=>'Xóa Menu thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Menu thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Menu không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
//menu right

    public function GetAllMenuRight(){
        try{
            $list=MispaSocial::whereIn('id',[14,15,16])->get();
            return view('admin.menu_right.index',[
                'list'=>$list,
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailMenuRight($id){
        try{
            $menu_right=MispaSocial::find($id);
            if($menu_right){
                return view('admin.menu_right.detail',['menu_right'=>$menu_right]);
            }else{
                return redirect()->back()->with(['false'=>'Menu right không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailMenuRight($id, Request $request){
        try{
            $menu_right=MispaSocial::find($id);
            if($menu_right){
                $menu_right->name_vi=$request->name_vi;
                $menu_right->name_en=$request->name_en;
                $menu_right->link=$request->link;
                if($menu_right->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật menu right thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật menu right thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Menu right không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }

    //social

    public function GetAllConfig(){
        try{

            $list1=MispaSocial::whereIn('id',[6,10,11,12,13])->get();
            $list2=MispaSocial::whereIn('id',[7,8,9])->get();
            $list3=MispaSocial::whereIn('id',[1,2,3,4,5])->get();
            return view('admin.social.index',[
                'list1'=>$list1,
                'list2'=>$list2,
                'list3'=>$list3,
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailConfig($id){
        try{
            $menu_right=MispaSocial::find($id);
            if($menu_right){
                return view('admin.social.detail',['menu_right'=>$menu_right]);
            }else{
                return redirect()->back()->with(['false'=>'Đối tượng không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailConfig($id, Request $request){
        try{
            $menu_right=MispaSocial::find($id);
            if($menu_right){
                $menu_right->name_vi=$request->name_vi;
                $menu_right->name_en=$request->name_en;
                $menu_right->link=$request->link;
                if($menu_right->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Đối tượng không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }

}
