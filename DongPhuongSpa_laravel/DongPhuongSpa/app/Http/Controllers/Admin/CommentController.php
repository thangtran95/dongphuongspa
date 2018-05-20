<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaCustomerComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function GetAllComment(){
        try{
            $list=MispaCustomerComment::where('is_delete',0)->orderBy('updated_at','desc')->get();
            return view('admin.comment.index',[
                'list'=>$list,
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateComment(){
        try{
            return view('admin.comment.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateComment(Request $request){
        try{
            $comment=new MispaCustomerComment();
            if($comment){
                $comment->customer_name=$request->customer_name;
                $comment->description_vi=$request->description_vi;
                $comment->description_en=$request->description_en;
                $comment->is_delete=0;
                if($comment->save())
                {
                    return redirect('admin/comment/list-comment.html')->with(['true'=>'Thêm comment thành công!!']);
                }else{
                    return redirect('admin/comment/list-comment.html')->with(['false'=>'Thêm comment thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Comment không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DetailComment($id){
        try{
            $comment=MispaCustomerComment::find($id);
            if($comment){
                return view('admin.comment.detail',['comment'=>$comment]);
            }else{
                return redirect()->back()->with(['false'=>'Comment không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailComment($id, Request $request){
        try{
            $comment=MispaCustomerComment::find($id);
            if($comment){
                $comment->customer_name=$request->customer_name;
                $comment->description_vi=$request->description_vi;
                $comment->description_en=$request->description_en;
                if($comment->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật comment thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật comment thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Comment không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function DeleteComment($id){
        try{
            $comment=MispaCustomerComment::find($id);
            if($comment){
                return view('admin.comment.delete',['comment'=>$comment]);
            }else{
                return redirect()->back()->with(['false'=>'Comment không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveComment($id){
        try{
            $comment=MispaCustomerComment::find($id);
            if($comment){
                $comment->is_delete=1;
                if($comment->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa Comment thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Comment thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Comment không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
