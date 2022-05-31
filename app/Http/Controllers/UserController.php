<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function add_user()
    {

        return  view('admin.panel.add_user');
    }

    public function store_user(Request $request)
    {

        $validateData = $request->validate([

            'name' => 'required ',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',


        ]);

        $user_data = new User();
        $user_data->name = $request['name'];
        $user_data->email= $request['email'];
        $user_data->password = Hash::make($request['password']);
        $user_data->role = $request['role'];
       
        $user_data->save();

        return back();
       
    }
    public function show_user()
    {
      
        $users ['alldata'] = User::all();
       
        return view('admin.panel.show_user', $users);
    }
    public function edit_user($id)
    {
        $data['alldata'] = User::all();
        $editData = User::find($id);
        return view('admin.panel.edit_user', $data,compact('editData'));
    }


    public function update_user(Request $request, $id)
    {

        $user_update_data = User::find($id);
        $user_update_data->email = $request->email;
        $user_update_data->name= $request->name;
        $user_update_data->role= $request->role;
        // $user_update_data->updated_by  = $request->updated_by ;

        $user_update_data->save();

        $notification = array(

            'message' => 'User Details Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('show_user.view')->with($notification);
    }


    public function delete_user(Request $request)
    {

        $user_delete_data = User::find($request->id);
        $user_delete_data->delete();

        return redirect()->route('show_user.view');

        // echo $id;
        // die;
    }
}
