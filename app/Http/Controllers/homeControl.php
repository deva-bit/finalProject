<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use\App\Models\manager;
use\App\Models\project;
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

    public function leader()
    {
      $data=DB::table('project_leader')
    ->join('project_manager','project_manager.project_id',"=",'project_leader.project_manager_id') 
    ->join('users','users.id',"=",'project_leader.users_id')
    ->get();
    return view('projectManager.leader',['data'=>$data]);
    
 
    }
    
}


