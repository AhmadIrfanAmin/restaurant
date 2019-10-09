@extends('admin-layout.content')
@section('sidebar')
@parent
Patients
@endsection
@section('content')

 <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add New Patient</h4>
                                       

                                        {{-- {!! Form::open(['route' => 'drivertruck.store', 'method' => 'post' ]) !!} --}}
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">MRN</label>
                                                    <input type="text" class="form-control"  placeholder="MRN" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Firstname</label>
                                                    <input type="text" class="form-control"  placeholder="Firstname">
                                                </div>
                                            </div>
                                               
                                                
                                                
                                         
                                                 <div class="form-row">
                                                 	<div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Lastname</label>
                                                    <input type="text" class="form-control"  placeholder="Lastname">
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
                                                   Save<span class="btn-label-right"><i class="far fa-save"></i></span>
                                                </button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection