<?php

namespace App\Http\Controllers;
use App\Models\TestUserModel;


use Illuminate\Http\Request;

class TestUserController extends Controller
{
    public function create()
    {
        return view('testUser');
        
    }




    public function store(Request $request)
{
    $info = new TestUserModel;
    $info->name = $request->input('fname');
    $info->usename = $request->input('fusername');
    $info->email = $request->input('femail');
    $info->password= $request->input('fpass');

    $info->save();


}
}
