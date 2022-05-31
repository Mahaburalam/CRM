<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product()
    {

        return  view('admin.panel.add_product');
    }


    public function store_product(Request $request)
    {

        $validateData = $request->validate([

            'product_id' => 'nullable',
            'product_details' => 'required ',
            'product_category' => 'required',


        ]);

        $product_data = new Product();
        $product_data->product_details = $request['product_details'];
        $product_data->product_category = $request['product_category'];
        $file_name = 'pro-';
        $product_id_name = $file_name . date('YmdHis');
        $product_data['product_id'] = $product_id_name;
        $product_data->save();

        return redirect()->route('show_product.view');
    }

 

        public function show_product()
        {
          
            $products ['alldata'] = Product::all();
           
            return view('admin.panel.show_product', $products);
        }



    public function edit_product($id)
    {
       
        $editData = Product::find($id);
        return view('admin.panel.edit_product', compact('editData'));
    }


    public function update_product(Request $request, $id)
    {

        $product_update_data = Product::find($id);
        $product_update_data->product_details = $request->product_details;
        $product_update_data->product_category = $request->product_category;

        $product_update_data->save();

        $notification = array(

            'message' => 'Product Details Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('show_product.view')->with($notification);
    }


    public function delete_product(Request $request)
    {

        $product_delete_data = Product::find($request->id);
        $product_delete_data->delete();

        return redirect()->route('show_product.view');

        // echo $id;
        // die;
    }
}
