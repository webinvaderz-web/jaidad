<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //
    public function dataTable()
    {
        return DataTables::eloquent(User::where('user_type','!=',0))->make(true);
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required','email'=>'required','password'=>'required']);
        User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>password_hash($request->password,PASSWORD_DEFAULT),
                'user_type'=>1,
            ]
        );
        return response('Agent Created !',201);
    }

    public function destroy(User $user)
    {
            // Property::whereAgentId($user->id)->delete();
            $user->delete();
            return response('Feature Deleted Successfully',200);
    }

    public function update(User $user , Request $request)
    {
        $request->validate(['name'=>'required','email'=>'required','password'=>'required']);
        $user->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>password_hash($request->password,PASSWORD_DEFAULT),
            ]
        );
        return response('Agent Updated Successfully',200);
    }


    public function login(Request $req)
    {
        $req->validate(['email'=>'required','password'=>'required']);
        $user = User::whereEmail($req->email)->first();
        if($user)
        {
            if(password_verify($req->password,$user->password))
            {
                $data = [];
                $data[0] = 'success';
                $data[1] =
                [
                    'user_id'=>$user->id,
                    'name'=>$user->name,
                    'user_type'=>$user->user_type
                ];

                return response($data,200);
            }
        }

        else
        {
            return response('fail',200);
        }
    }
}
