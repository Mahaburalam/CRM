<?php

namespace App\Http\Controllers;

use App\Models\CallType;
use Illuminate\Http\Request;

class CallTypeController extends Controller
{
    public function add_calltype()
    {

        return  view('admin.panel.add_calltype');
    }


    public function store_calltype(Request $request)
    {

        $validateData = $request->validate([

            'calltype_id' => 'nullable',
            'calltype_name' => 'required ',

        ]);

        $calltype_data = new CallType();

        $calltype_data->calltype_name = $request['calltype_name'];
        $file_name = 'calltype-';
        $calltype_id_name = $file_name . date('YmdHis');
        $calltype_data['calltype_id'] = $calltype_id_name;
        $calltype_data->save();

        return redirect()->route('show_calltype.view');
    }



    public function show_calltype()
    {

        $calltypes['alldata'] = CallType::all();

        return view('admin.panel.show_calltype', $calltypes);
    }



    public function edit_calltype($id)
    {

        $editData = CallType::find($id);
        return view('admin.panel.edit_calltype', compact('editData'));
    }


    public function update_calltype(Request $request, $id)
    {

        $calltype_update_data = CallType::find($id);

        $calltype_update_data->calltype_name = $request->calltype_name;

        $calltype_update_data->save();

        $notification = array(

            'message' => 'CallType Details Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('show_calltype.view')->with($notification);
    }


    public function delete_calltype(Request $request)
    {

        $calltype_delete_data = CallType::find($request->id);
        $calltype_delete_data->delete();

        return redirect()->route('show_calltype.view');

        // echo $id;
        // die;
    }
}
