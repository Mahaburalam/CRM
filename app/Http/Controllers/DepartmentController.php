<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function add_department()
    {

        return  view('admin.panel.add_department');
    }


    public function store_department(Request $request)
    {

        $validateData = $request->validate([

            'dept_id' => 'nullable',
            'dept_name' => 'required ',
            'dept_head' => 'required',
            'updated_by' => 'required',


        ]);

        $dept_data = new Department();
        $dept_data->dept_name = $request['dept_name'];
        $dept_data->dept_head = $request['dept_head'];
        $dept_data->updated_by = $request['updated_by'];
        $file_name = 'dept-';
        $dept_id_name = $file_name . date('YmdHis');
        $dept_data['dept_id'] = $dept_id_name;
        $dept_data->save();

        return redirect()->route('show_department.view');
    }

 

        public function show_department()
        {
          
            $departments ['alldata'] = Department::all();
           
            return view('admin.panel.show_department', $departments);
        }



    public function edit_department($id)
    {
       
        $editData = Department::find($id);
        return view('admin.panel.edit_department', compact('editData'));
    }


    public function update_department(Request $request, $id)
    {

        $dept_update_data = Department::find($id);
        $dept_update_data->dept_name = $request->dept_name;
        $dept_update_data->dept_head = $request->dept_head;
        $dept_update_data->updated_by  = $request->updated_by ;

        $dept_update_data->save();

        $notification = array(

            'message' => 'Department Details Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('show_department.view')->with($notification);
    }


    public function delete_department(Request $request)
    {

        $dept_delete_data = Department::find($request->id);
        $dept_delete_data->delete();

        return redirect()->route('show_department.view');

        // echo $id;
        // die;
    }
}
