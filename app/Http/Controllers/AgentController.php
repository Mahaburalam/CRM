<?php

namespace App\Http\Controllers;
use App\Models\user_account_info;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    function index(){

        return view('agent.panel.agent_dashboard');
    }
       public function user_account_info_test(Request $request)
    {

        // dd($request);

        $validateData = $request->validate([

            // 'ticket_id' => 'required',
            'ac_name' => 'required ',
            'ac_status' => 'required',
            'ac_type'=>'required',
            'profit_status'=>'required ',
            'kyc_status'=>'required',
            'ac_id'=>'required',
            'ac_dob'=>'required',
            'ac_balance'=>'required ',
            'ac_limit_status'=>'required ',
            'ac_more_info_1'=>'nullable',
            'ac_more_info_2'=>'nullable',
            'ac_more_info_3'=>'nullable',
            'ac_more_info_4'=>'nullable',
            'ac_more_info_5'=>'nullable',
            'ac_category'=>'required ',
            'ac_sub_category'=>'required ',
            'ac_sub_sub_category_1'=>'required ',
            'ac_sub_sub_category_2'=>'required ',
            'remarks'=>'nullable'
        ]);
        // dd($request);
        $info_data = new user_account_info();
        $file_name = 'tkt -';
        $info_id_name = $file_name . date('YmdHis');
        $info_data->ticket_id = $info_id_name;
        $data[] = $request->all();
        $info_data->ac_name = $request['ac_name'];
        $info_data->ac_status = $request['ac_status'];
        $info_data->ac_type = $request['ac_type'];
        $info_data->profit_status = $request['profit_status'];
        $info_data->kyc_status = $request['kyc_status'];
        $info_data->ac_id = $request['ac_id'];
        $info_data->ac_balance = $request['ac_balance'];
        $info_data->ac_dob = $request['ac_dob'];
        $info_data->ac_limit_status = $request['ac_limit_status'];
        $info_data->ac_more_info_1 = $request['ac_more_info_1'];
        $info_data->ac_more_info_2 = $request['ac_more_info_2'];
        $info_data->ac_more_info_3 = $request['ac_more_info_3'];
        $info_data->ac_more_info_4 = $request['ac_more_info_4'];
        $info_data->ac_more_info_5 = $request['ac_more_info_5'];
        $info_data->ac_category = $request['ac_category'];
        $info_data->ac_sub_category = $request['ac_sub_category'];
        $info_data->ac_sub_sub_category_1 = $request['ac_sub_sub_category_1'];
        $info_data->ac_sub_sub_category_2 = $request['ac_sub_sub_category_2'];
        $info_data->remarks = $request['remarks'];
        
        $info_data->save($data);
        

        return back();
    }
    
      
}
