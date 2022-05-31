@extends('admin.master')
@section('admin')

<!-- Start right Content here -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div>
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30" style="color: black;">Product Update</h4>
                                <form method="post" action="{{route('update_product_details.view',$editData->id)}}">
                                    @csrf
                                    <div class="form-group"><label for="product_id"><b>Product ID</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="product_id" class="form-control" id="name" value="{{$editData->product_id}}" readonly required>
                                    </div>
                                    <div class="form-group"><label for="product_details"><b>Product Details</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="product_details" class="form-control" id="product_details" value="{{$editData->product_details}}" required>
                                    </div>
                                    <div class="form-group"><label for="product_category"><b>Product Category</b><span style="color: red;"> *</span></label>

                                        <input type="text" name="product_category" class="form-control" id="product_category" value="{{$editData->product_category}}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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