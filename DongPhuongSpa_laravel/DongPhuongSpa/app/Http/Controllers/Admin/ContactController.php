<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaSubscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MispaContact;

class ContactController extends Controller
{
    //
    public function GetAllContact(){
        try{
            $list=MispaContact::where('is_delete',0)->orderBy('updated_at','desc')->get();
            return view('admin.contact.index',[
                'list'=>$list
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }

    public function DetailContact($id){
        try{
            $contact=MispaContact::find($id);
            if($contact){
                return view('admin.contact.detail',[
                    'contact'=>$contact,
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailContact($id,Request $request){
        try{
            $contact=MispaContact::find($id);
            if($contact){
                $contact->status=$request->status ? 1:0;
                $contact->save();
                return redirect()->back()->with('true','Cập nhật contact thành công!');
            }else{
                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeleteContact($id){
        try{
            $contact=MispaContact::find($id);
            if($contact){
                return view('admin.contact.delete',['contact'=>$contact]);
            }else{
                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveContact($id){
        try{
            $contact=MispaContact::find($id);
            if($contact){
                $contact->is_delete=1;
                if($contact->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa Contact thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Contact thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
//subscribe
    public function GetAllSubscribe(){
        try{
            $list=MispaSubscribe::where('is_delete',0)->orderBy('updated_at','desc')->get();
            return view('admin.subscribe.index',[
                'list'=>$list
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }

//    public function DetailSubscribe($id){
//        try{
//            $contact=MispaContact::find($id);
//            if($contact){
//                return view('admin.contact.detail',[
//                    'contact'=>$contact,
//                ]);
//            }else{
//                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
//            }
//        }catch (\Exception $e){
//            dd($e);
//        }
//    }
//    public function PostDetailSubscribe($id,Request $request){
//        try{
//            $contact=MispaContact::find($id);
//            if($contact){
//                $contact->status=$request->status ? 1:0;
//                $contact->save();
//                return redirect()->back()->with('true','Cập nhật contact thành công!');
//            }else{
//                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
//            }
//        }catch (\Exception $e){
//            dd($e);
//            return redirect('error.html');
//        }
//    }
    public function DeleteSubscribe($id){
        try{
            $subscribe=MispaSubscribe::find($id);
            if($subscribe){
                return view('admin.subscribe.delete',['subscribe'=>$subscribe]);
            }else{
                return redirect()->back()->with(['false'=>'Contact không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveSubscribe($id){
        try{
            $subscribe=MispaSubscribe::find($id);
            if($subscribe){
                $subscribe->is_delete=1;
                if($subscribe->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa đăng ký thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa đăng ký thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Đăng ký không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
