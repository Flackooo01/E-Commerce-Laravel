<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    //View Table
    public function all_users(){
        $users = User::orderBy('id', 'asc')->get();
        return view ('admin.table', compact('users'));
    }

    public function edit($id){
        $users = User::findOrFail($id);
        return view('admin.edit', compact('users'));
    }

    public function update(Request $request, $id){
        $users = User::findOrFail($id);
        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $users->name = $name;
        $users->username = $username;
        $users->email = $email;
        $users->phone = $phone;
        $users->address = $address;

        $data = $users->save();

        if($data){
            session()->flash('success', 'Users Update Successfully');
            return redirect(route('admin/user/table'));
        }else{
            session()->flash('error', 'Some Problem Occured');
            return redirect(route('admin/user/table'));
        }

    }
}
