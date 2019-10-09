@extends('admin-layout.content')

@section('sidebar')

@parent

Zone

@endsection

@section('content')



<!-- Form row -->

<div class="row">

    <div class="col-12">

        <div class="card">

            <div class="card-body">

                <h4 class="header-title">Add New Zone</h4>

                <form>

                    <div class="form-group ">

                        <label  class="col-form-label">Zone Name</label>

                        <input type="text" class="form-control"  required>

                    </div>

                    <div class="form-group ">

                        <label for="inputPassword4" class="col-form-label">Zone List</label>

                        <textarea class="form-control" rows="10" required></textarea>

                    </div>

                    <button type="button" class="btn btn-info waves-effect waves-light">

                        Add<span class="btn-label-right"><i class="fas fa-plus-circle"></i></span>

                    </button>
                </form>
            </div> <!-- end card-body -->

        </div> <!-- end card-->

    </div> <!-- end col -->

</div>

<!-- end row -->



@endsection