<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use\App\Models\manager;
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
        else if ($typeuser=='1')
        {
            return view("projectManager.leader");
        }
    }

    function saveData(Request $req)
    {
    $member =new manager;
    $member->project_type = $req->select;
    $member->project_name = $req->project;
    $member->project_leader = $req->select1;
    $member->save();
    return redirect ('projectManager.manager');
    }
  
}
