<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\MispaUser;
use Image;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function GetLogin(){
        try{
            Session::forget('admin');
            return view('admin.login');
        }catch (\Exception $e){
            return redirect('error.html');
        }
    }
    public function GetLogout()
    {
        try{
            Session::forget('admin');
            return redirect('admin/login.html');
        }catch (\Exception $e)
        {
            return redirect('error.html');
        }
    }
    public function PostLogin(Request $request){
        try{
            $email = $request->get('email');
            $password=$request->get('password');
            $user = MispaUser::where('email',$email)->where('is_delete',0)->first();
            if($user){
                if(password_verify($password, $user->password)){
                    session(['admin'=>$user]);
                    return redirect('admin/profile.html');
                }
                else{
                    return redirect()->back()->with('false','Username or password not correct!');
                }
            }
            else{
                return redirect()->back()->with('false','Username or password not correct!');
            }
        }catch (\Exception $e){
            return redirect('error.html');
        }
    }
    public function Profile(){
        try{
            $admin=session()->get('admin');
            if($admin)
            {
                return view('admin.profile',[
                    'user'=>$admin
                ]);
            }else{
                return redirect()->back();
            }
        }catch (\Exception $e)
        {
            return redirect('error.html');
        }
    }
    public function PostProfile(Request $request)
    {
        try{
            $user=MispaUser::find(session()->get('admin')->id);
            $user->phone=$request->phone;
            $user->address=$request->address;
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = 'user-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/user/'.$filename);
                Image::make($image->getRealPath())->resize(160, 160)->save($destinationPath);
//                if (file_exists('images/user/'.$user->avatar)) {
//                    unlink('images/user/'.$user->avatar);
//                }
                $user->avatar = $filename;
            }
            if($user->save())
            {
                session(['admin'=>$user]);
                return redirect()->back()->with(['true'=>'Cập nhật thông tin thành công!!']);
            }else{
                return redirect()->back()->with(['false'=>'Cập nhật thông tin thất bại!!']);
            }
        }catch (\Exception $e)
        {
            return redirect('error.html');
        }
    }
    public function UpdatePassword(Request $request)
    {
        try{
            $user=MispaUser::find(session()->get('admin')->id);
            if($user)
            {
                $password=$request->password_old;
                if(password_verify($password, $user->password)){
                    $user->password = Hash::make($request->password_news);
                    if($user->save())
                    {
                        return redirect()->back()->with(['true'=>'Cập nhật mật khẩu thành công!!']);
                    }else{
                        return redirect()->back()->with(['false'=>'Cập nhật mật khẩu thất bại!!']);
                    }
                }
                else{
                    return redirect()->back()->with(['false'=>'Mật khẩu cũ không đúng!!']);
                }
            }
        }catch (\Exception $e)
        {
            dd($e);
            return redirect('error.html');
        }
    }

    public function GetAllUser(){
        try{
            $list=MispaUser::where('is_delete',0)->orderBy('updated_at','desc')->get();
            return view('admin.user.index',[
               'list'=>$list
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateUser(){
        try{
            return view('admin.user.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateUser(Request $request){
        try{
            $user=new MispaUser();
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->address=$request->address;
            $user->role=$request->role;
            $user->is_delete=0;
            $user->password=Hash::make($request->password);
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = 'user-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/user/'.$filename);
                Image::make($image->getRealPath())->resize(160, 160)->save($destinationPath);
                $user->avatar = $filename;
            }else{
                $user->avatar = 'user_default.png';
            }
            if($user->save())
            {
                return redirect('admin/user/list-user.html')->with(['true'=>'Thêm mới thành công!!']);
            }else{
                return redirect('admin/user/list-user.html')->with(['false'=>'Thêm mới thất bại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailUser($id){
        try{
            $user=MispaUser::find($id);
            if($user){
                return view('admin.user.detail',['user'=>$user]);
            }else{
                return redirect()->back()->with(['false'=>'User không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailUser($id,Request $request){
        try{
            $user=MispaUser::find($id);
            if($user){
                $user->email=$request->email;
                $user->phone=$request->phone;
                $user->address=$request->address;
                $user->role=$request->role;
                $user->is_delete=0;
                $user->password=Hash::make($request->password);
                if ($request->hasFile('avatar')) {
                    $image = $request->file('avatar');
                    $filename = 'user-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/user/'.$filename);
                    Image::make($image->getRealPath())->resize(160, 160)->save($destinationPath);
                    $user->avatar = $filename;
                }else{
                    $user->avatar = 'user_default.png';
                }
                if($user->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'User không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function ChangePasswordUser($id, Request $request){
        try{
            $user=MispaUser::find($id);
            if($user)
            {
                $user->password = Hash::make($request->password_news);
                if($user->save())
                {
                    return redirect()->back()->with(['true'=>'Cập nhật mật khẩu thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Cập nhật mật khẩu thất bại!!']);
                }
            }
        }catch (\Exception $e)
        {
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeleteUser($id){
        try{
            $user=MispaUser::find($id);
            if($user){
                return view('admin.user.delete',['user'=>$user]);
            }else{
                return redirect()->back()->with(['false'=>'User không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveUser($id){
        try{
            $user=MispaUser::find($id);
            if($user){
                $user->is_delete=1;
                if($user->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa user thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa user thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'User không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
