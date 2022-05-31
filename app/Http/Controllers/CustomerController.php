<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer()
    {

        return  view('admin.panel.add_customer');
    }


    public function store_customer(Request $request)
    {

        $validateData = $request->validate([

            'cus_id' => 'nullable',
            'cus_name' => 'required ',
            'cus_f_name' => 'required',
            'cus_m_name' => 'required',
            'cus_contact_no' => 'required',
            'cus_segment' => 'required',
            'cus_nid' => 'required',
            'cus_division' => 'required',
            'cus_district' => 'required',
            'cus_area' => 'required',


        ]);

        $cus_data = new Customer();
        $cus_data->cus_name = $request['cus_name'];
        $cus_data->cus_f_name = $request['cus_f_name'];
        $cus_data->cus_m_name = $request['cus_m_name'];
        $cus_data->cus_contact_no = $request['cus_contact_no'];
        $cus_data->cus_segment = $request['cus_segment'];
        $cus_data->cus_nid = $request['cus_nid'];
        $cus_data->cus_division = $request['cus_division'];
        $cus_data->cus_district = $request['cus_district'];
        $cus_data->cus_area = $request['cus_area'];
        $file_name = 'cus-';
        $cus_id_name = $file_name . date('YmdHis');
        $cus_data['cus_id'] = $cus_id_name;
        $cus_data->save();

        return redirect()->route('show_customer.view');
    }

 

        public function show_customer()
        {
          
            $customers ['alldata'] = Customer::all();
           
            return view('admin.panel.show_customer', $customers);
        }



    public function edit_customer($id)
    {
       
        $editData = Customer::find($id);
        return view('admin.panel.edit_customer', compact('editData'));
    }


    public function update_customer(Request $request, $id)
    {

        $cus_update_data = Customer::find($id);
        $cus_update_data->cus_name = $request->cus_name;
        $cus_update_data->cus_f_name = $request->cus_f_name;
        $cus_update_data->cus_m_name  = $request->cus_m_name ;
        $cus_update_data->cus_contact_no = $request->cus_contact_no;
        $cus_update_data->cus_segment = $request->cus_segment;
        $cus_update_data->cus_nid = $request->cus_nid;
        $cus_update_data->cus_division  = $request->cus_division ;
        $cus_update_data->cus_district = $request->cus_district;
        $cus_update_data->cus_area = $request->cus_area;
      
        $cus_update_data->save();

        $notification = array(

            'message' => 'Customer Details Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('show_customer.view')->with($notification);
    }


    public function delete_customer(Request $request)
    {

        $dept_delete_data = Customer::find($request->id);
        $dept_delete_data->delete();

        return redirect()->route('show_customer.view');

        // echo $id;
        // die;
    }
}
