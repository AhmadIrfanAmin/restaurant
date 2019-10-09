@extends('admin-layout.content')
@section('sidebar')
@parent
Locations
@endsection
@section('content')

<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Edit Location</h4>


                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Name</label>
                            <input type="text" class="form-control"  placeholder="Name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Code</label>
                            <input type="text" class="form-control"  placeholder="Code">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="inputEmail4" class="col-form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>


                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4" class="col-form-label">City</label>
                        <input type="text" class="form-control"  placeholder="City">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="col-form-label">State</label>
                        <input type="text" class="form-control"  placeholder="State">
                    </div>

                </div>

                <div class="form-row">
                   <div class="form-group col-md-6">
                    <label for="inputPassword4" class="col-form-label">Zip Code</label>
                    <input type="text" class="form-control"  placeholder="Zip Code">
                </div>


                <div class="form-group col-md-6">
                    <label for="inputState" class="col-form-label">Status</label>
                    <select class="selectpicker" data-style="btn-light">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
            </div>


            <button type="button" class="btn btn-info waves-effect waves-light">
                Update<span class="btn-label-right"><i class="far fa-save"></i></span>
            </button>

        </form>

    </div> <!-- end card-body -->
</div> <!-- end card-->
</div> <!-- end col -->
</div>
<!-- end row -->

@endsection