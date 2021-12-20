<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use\App\Models\manager;
use\App\Models\project;
use\App\Models\leader;
class homeControl extends Controller
{
    public function index()
    {
        return view("home");
    }


    function redirectFunct()
    {
        
        $typeuser=Auth::user()->role;

        if($typeuser=='0')
        {
            $data=manager::all();
            return view("projectManager.manager", compact('data'));
        }
        else if($typeuser=='1')
        {
            
            
            $x=DB::table('users')
            ->join('project_manager','users.id',"=",'project_manager.project_leader')
            ->get();
            return view('projectManager.leader',['x'=>$x]);
        }

        else
        {
            return view("home");
        }
    }


    function saveData(Request $req)
    {
    $data=manager::all();
    $member =new project;
    $member->project_type = $req->select;
    $member->project_name = $req->project;
    $member->project_leader = $req->select1;
    $member->save();
    return view ('projectManager.manager', compact('data'));
    }

    public function manager()
    {
    $x=DB::table('users')
    ->join('project_manager','users.id',"=",'project_manager.project_leader')->get();
    return view('projectManager.manage_manager',['x'=>$x]);
 
    }
    function showdata($project_id)
    {
        $data=manager::all();
        $x=project::find($project_id);
        return view('projectManager.edit_manager',['x'=>$x],['data'=>$data]);
      
        
    }

    function update(Request $req)
    {
        $data=project::find($req->project_id);
        $data->project_id=$req->project_id;
        $data->project_type=$req->select;
        $data->project_name=$req->project;
        $data->project_leader=$req->select1;
        $data->save();
        return redirect()->back();

    }
 

    function deleteStud($project_id)
    {
        $data=project::find($project_id);
        $data->delete();
        return redirect()->back();
    }

   function leader($project_id)
    {
        $data=manager::all();
       
        $x=project::find($project_id);
        return view('projectManager.edit_leader',['x'=>$x],['data'=>$data]);
    
 
    }
    function updateleader(Request $req)
    {
        $member=project::all();
        $data =new leader;
        $data->project_manager_id=$req->leader_id;
         $data->users_id=$req->id;
        $data->start_date=$req->sd;
        $data->end_date=$req->ed;
        $data->duration=$req->duration;
        $data->cost=$req->cost;
         $data->client=$req->client;
        echo $data->project_member=implode(',',$req['select5']);
        
         $data->project_status=$req->select6;
        $data->project_stage=$req->select7;
        $data->save();
        return redirect()->back();
      

    }
    function viewleader($project_id)
    {
        $d=project::find($project_id);
        $x=DB::table('project_leader')
        ->join('project_manager','project_manager.project_id',"=",'project_leader.project_manager_id')
        ->join('users','users.id',"=",'project_leader.users_id')
        ->get();
        return view('projectManager.view',['x'=>$x],['d'=>$d]);
      
        
    }
}



