@extends('admin-layout.content')
@section('sidebar')
@parent
Physicians
@endsection
@section('content')

<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add New Physician</h4>
                

                 <form method="post" action="{{ route('physician.store') }}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Firstname</label>
                            <input type="text" class="form-control"  placeholder="Firstname" name="firstname">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Last Name</label>
                            <input type="text" class="form-control"  placeholder="Last Name" name="lastname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Password</label>
                            <input type="password" class="form-control"  placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Password Confirmation</label>
                            <input type="password" class="form-control"  placeholder="Password Confirmation" name="password_confirmation">
                        </div>
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Phone</label>
                            <input type="text" class="form-control"  placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-form-label">Biography</label>
                       <textarea id="summernote-editor" name="biography">
                                        <h6>This is an simple editable area.</h6>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p>
                                            End of simple area
                                        </p>
                                    </textarea><!-- end summernote-editor-->
                    </div>


                    <div class="form-group">
                        <label class="col-form-label">Specialities</label>
                        <input type="text" class="form-control"  placeholder="Specialities" name="speciality">
                    </div>

                    <div class="form-group">
                        <label  class="col-form-label">Locations</label>
                        <select class="selectpicker" multiple data-style="btn-light" name="locations[]">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>

                    <div class="form-row">
                      
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Type of Physician</label>
                            <select class="selectpicker" data-style="btn-light" name="type">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label  class="col-form-label">Status</label>
                            <select class="selectpicker" data-style="btn-light" name="status">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-info waves-effect waves-light">
                        Save<span class="btn-label-right"><i class="far fa-save"></i></span>
                    </button>

                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script-dashboard')
 <script src="{{ URL::asset('public/assets/libs/summernote/summernote-bs4.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('public/assets/js/pages/form-summernote.init.js')}}"></script>

<script type="text/javascript">

@stop