@extends('admin.master')
@section('admin')


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('delete_department.view')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="deleteModalLabel" style="color: black;">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="dept_id">
                    Are you sure you want to delete it?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
                                <div class="row m-b-10">

                                    <a href="{{route('show_department.view')}}">
                                        <h4 class="m-t-0" style="color: black;">Show Department</h4>
                                    </a>
                                </div>
                                <div class="row m-t-5" style="text-align: center">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Department ID</th>
                                                    <th>Department Name</th>
                                                    <th>Department Head</th>
                                                    <th>Updated By</th>
                                                    <th>Created Date-Time</th>
                                                    <th>Updated Date-Time</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>

                                            </thead>

                                            <tbody>

                                                @foreach ($alldata as $department)
                                                <tr>
                                                    <td>{{ $department->dept_id}}</td>
                                                    <td>{{ $department->dept_name}}</td>
                                                    <td>{{ $department->dept_head}}</td>
                                                    <td>{{ $department->updated_by}}</td>
                                                    <td>{{ $department->created_at}}</td>
                                                    <td>{{ $department->updated_at}}</td>
                                                    <td>
                                                        <a href="{{route('edit_department_details.view',$department->id)}}" class="btn btn-primary btn-flat" id="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    </td>
                                                    <td>

                                                        <button type="button" class="btn btn-danger deleteButton" value="{{ $department->id}}" data-toggle="modal" data-target="#deleteModal">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="row">

                                        </div>
                                    </div>

                                </div>

                            </div><!-- card-body -->

                        </div><!-- card -->

                    </div><!-- col-->

                </div><!-- end row -->


            </div><!-- container -->


        </div><!-- Page content Wrapper -->

    </div><!-- content -->

</div><!-- End Right content here -->

@endsection

@section('scripts')

<script>
    $(document).ready(function() {

        // $('.deleteButton').click(function(e) {
        $(document).on('click', '.deleteButton', function(e) {

            // });
            e.preventDefault();
            var dept_id = $(this).val();
            $('#dept_id').val(dept_id);
            $('#deleteModal').modal()
        })

    })
</script>

@endsection