<?php

namespace App\Http\Controllers\Admin;

use App\Models\MispaTeam;
use App\Models\MispaTeamLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class TeamController extends Controller
{
    //
    public function GetAllTeam(){
        try{
            $list1=DB::table('mispa_team_language')->join('mispa_team','mispa_team_language.team_id','=','mispa_team.id')
                ->where('mispa_team_language.language_id',1)
                ->where('mispa_team.is_delete',0)->orderBy('mispa_team.updated_at','desc')
                ->select('mispa_team.*','mispa_team_language.role','mispa_team_language.description')
                ->get();
            $list2=DB::table('mispa_team_language')->join('mispa_team','mispa_team_language.team_id','=','mispa_team.id')
                ->where('mispa_team_language.language_id',2)
                ->where('mispa_team.is_delete',0)->orderBy('mispa_team.updated_at','desc')
                ->select('mispa_team.*','mispa_team_language.role','mispa_team_language.description')
                ->get();
            return view('admin.team.index',[
                'list1'=>$list1,
                'list2'=>$list2
            ]);
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function CreateTeam(){
        try{
            return view('admin.team.create');
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostCreateTeam(Request $request){
        try{
            $team=new MispaTeam();
            $team->sort_order=$request->sort_order;
            $team->name=$request->name;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = 'team-' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images/team/'.$filename);
                Image::make($image->getRealPath())->resize(260, 260)->save($destinationPath);
                $team->image = $filename;

            }
            $team1=new MispaTeamLanguage();
            $team1->role=$request->role_vi;
            $team1->description=$request->description_vi;
            $team1->language_id=1;

            $team2=new MispaTeamLanguage();
            $team2->role=$request->role_en;
            $team2->description=$request->description_en;
            $team2->language_id=2;

            $result=DB::transaction(function() use ($team, $team1, $team2){
                $team->save();

                $team1->team_id=$team->id;
                $team1->save();

                $team2->team_id=$team->id;
                $team2->save();
                return redirect('admin/team/list-team.html')->with('true','Thêm Nhân viên thành công!');
            });
            return $result;
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }

    public function DetailTeam($id){
        try{
            $team=MispaTeam::find($id);
            if($team){
                $team_vi=MispaTeamLanguage::where('team_id',$id)->where('language_id',1)->first();
                $team_en=MispaTeamLanguage::where('team_id',$id)->where('language_id',2)->first();
                return view('admin.team.detail',[
                    'team'=>$team,
                    'team_vi'=>$team_vi,
                    'team_en'=>$team_en
                ]);
            }else{
                return redirect()->back()->with(['false'=>'Nhân viên không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function PostDetailteam($id,Request $request){
        try{
            $team=MispaTeam::find($id);
            if($team){
                $team->sort_order=$request->sort_order;
                $team->name=$request->name;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = 'team-' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('images/team/'.$filename);
                    Image::make($image->getRealPath())->resize(260, 260)->save($destinationPath);
                    $team->image = $filename;
                }
                $team1=MispaTeamLanguage::where('team_id',$id)->where('language_id',1)->first();
                $team1->role=$request->role_vi;
                $team1->description=$request->description_vi;

                $team2=MispaTeamLanguage::where('team_id',$id)->where('language_id',2)->first();
                $team2->role=$request->role_en;
                $team2->description=$request->description_en;

                $result=DB::transaction(function() use ($team, $team1, $team2){
                    $team->save();

                    $team1->save();

                    $team2->save();
                    return redirect()->back()->with('true','Cập nhật Nhân viên thành công!');
                });
                return $result;
            }else{
                return redirect()->back()->with(['false'=>'Nhân viên không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
            return redirect('error.html');
        }
    }
    public function DeleteTeam($id){
        try{
            $team=DB::table('mispa_team_language')->join('mispa_team','mispa_team_language.team_id','=','mispa_team.id')
                ->where('mispa_team_language.language_id',1)
                ->where('mispa_team_language.team_id',$id)
                ->select('mispa_team.*','mispa_team_language.role')
                ->first();
            if($team){
                return view('admin.team.delete',['team'=>$team]);
            }else{
                return redirect()->back()->with(['false'=>'Sản phẩm không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function RemoveTeam($id){
        try{
            $team=MispaTeam::find($id);
            if($team){
                $team->is_delete=1;
                if($team->save())
                {
                    return redirect()->back()->with(['true'=>'Xóa Nhân viên thành công!!']);
                }else{
                    return redirect()->back()->with(['false'=>'Xóa Nhân viên thất bại!!']);
                }
            }else{
                return redirect()->back()->with(['false'=>'Nhân viên không tồn tại!!']);
            }
        }catch (\Exception $e){
            dd($e);
        }
    }
}
