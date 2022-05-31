<?php

namespace App\Http\Controllers;

use App\Models\Business_Division;
use App\Models\CallType;
use Illuminate\Http\Request;

class BusinessDivisionController extends Controller
{
    public function add_business_division()
    {
        $data['alldata'] = CallType::all();

        return  view('admin.panel.add_business_division',$data);
    }


    public function store_business_division(Request $request)
    {

        $validateData = $request->validate([

            'business_division_id' => 'nullable',
            'calltype_name' => 'required ',
            'business_division_name' => 'required ',



        ]);

        $business_division_data = new Business_Division();

        $business_division_data->calltype_name = $request['calltype_name'];
        $business_division_data->business_division_name = $request['business_division_name'];
        $file_name = 'bsdv-';
        $business_division_id_name = $file_name . date('YmdHis');
        $business_division_data['business_division_id'] = $business_division_id_name;
        $business_division_data->save();

        return redirect()->route('show_business_division.view');
    }


    public function show_business_division()
    {

        $business_divisions['alldata'] = Business_Division::all();

        return view('admin.panel.show_business_division', $business_divisions);
    }



    public function edit_business_division($id)
    {
        $data['alldata'] = CallType::all();
        $editData = Business_Division::find($id);
        return view('admin.panel.edit_business_division', $data,compact('editData'));
    }


    public function update_business_division(Request $request, $id)
    {

        $business_division_update_data = Business_Division::find($id);

        $business_division_update_data->calltype_name = $request->calltype_name;
        $business_division_update_data->business_division_name = $request->business_division_name;

        $business_division_update_data->save();

        $notification = array(

            'message' => 'BusinessDivision Details Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('show_business_division.view')->with($notification);
    }


    public function delete_business_division(Request $request)
    {

        $business_division_delete_data = Business_Division::find($request->id);
        $business_division_delete_data->delete();

        return redirect()->route('show_business_division.view');

        // echo $id;
        // die;
    }
}
