@extends('admin-layout.content')

@section('sidebar')

@parent

Restaurant

@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add New Restaurant</h4>
                    <form  action="{{route('restaurants.store')}}" method="post"><!-- Form row -->
                            {{csrf_field()}}

                        <div class="form-group ">
                            <label  class="col-form-label">Restaurant Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group ">
                            <label for="inputPassword4" class="col-form-label">Restaurant Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                         <div class="form-group ">
                            <label for="inputPassword4" class="col-form-label">Contact</label>
                            <input type="text" class="form-control" name="contact">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Status</label>
                            <select class="selectpicker" data-style="btn-light" name="status">
                                <option value="">Select</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info waves-effect waves-light">
                            Add
                            <span class="btn-label-right"><i class="fas fa-plus-circle"></i>
                            </span>

                        </button>
                    </form>
                </div> <!-- end card-body -->

            </div> <!-- end card-->

        </div> <!-- end col -->

    </div>

    <!-- end row -->



@endsection



