@extends('admin.master')
@section('admin')
<style>
    .inputstyle {

        border-color: #808B96;
    }
</style>

<!-- Start right Content here -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div>
            <div class="container-fluid">

                <div class="row">

                    <!-- Basic example -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30" style="color: black;">Add Product</h4>
                                <form method="POST" action="{{route('store_product.view')}}">
                                    @csrf
                                    <div class="form-group"><label for="product_details"><b>Product Details</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="product_details" class="form-control inputstyle" id="product_details">
                                        <span style="color: red;">@error('product_details'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group"><label for="product_category"><b>Product Category</b><span style="color: red;"> *</span></label>

                                        <input type="text" name="product_category" class="form-control inputstyle" id="product_category">
                                        <span style="color: red;">@error('product_category'){{$message}}@enderror</span>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                </form>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-->
                </div><!-- end row -->
            </div><!-- container -->
        </div><!-- Page content Wrapper -->
    </div><!-- content -->
</div><!-- End Right content here -->

@endsection