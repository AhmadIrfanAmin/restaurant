@extends('admin-layout.content')
@section('sidebar')
@parent
Bill
@endsection
@section('content')

 <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Bill</h4>
                                       

                                         {{-- {!! Form::model($goodType,['route' => ['goodtypes.update',$goodType->id], 'method' => 'PATCH']) !!} --}}
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Patient</label>
                                                    <input type="text" class="form-control"  placeholder="Patient" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Visit log</label>
                                                    <input type="text" class="form-control"  placeholder="Visit log">
                                                </div>
                                            </div>
                                               
                                               
                                                 <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Service date </label>
                                                    <input type="text" class="form-control"  placeholder="Service date">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Service date 1</label>
                                                    <input type="text" class="form-control"  placeholder="Service date 1">
                                                </div>
                                                
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Service item</label>
                                                    <input type="text" class="form-control"  placeholder="Service item">
                                                </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Process date</label>
                                                    <input type="text" class="form-control"  placeholder="Process date">
                                                </div>
                                            </div>

                                                <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Cpt4</label>
                                                    <input type="text" class="form-control"  placeholder="Cpt4">
                                                </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Quantity</label>
                                                    <input type="text" class="form-control"  placeholder="Quantity">
                                                </div>
                                             
                                               
                                            </div>

                                               <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Diagnoses</label>
                                                    <input type="text" class="form-control"  placeholder="Diagnoses">
                                                </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Procedures</label>
                                                    <input type="text" class="form-control"  placeholder="Procedures">
                                                </div>
                                             
                                               
                                            </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Physician</label>
                                                    <input type="text" class="form-control"  placeholder="Physician">
                                                </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Referring physician</label>
                                                    <input type="text" class="form-control"  placeholder="Referring physician">
                                                </div>
                                             
                                               
                                            </div>
                                            <div class="form-group ">
                                                    <label for="inputPassword4" class="col-form-label">Location</label>
                                                    <input type="text" class="form-control"  placeholder="Location">
                                                </div>
                                                <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Place of service</label>
                                                    <input type="text" class="form-control"  placeholder="Place of service">
                                                </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Created by</label>
                                                    <input type="text" class="form-control"  placeholder="Physician">
                                                </div>
                                             
                                               
                                            </div>
                                               <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Updated by</label>
                                                    <input type="text" class="form-control"  placeholder="Location">
                                                </div>
                                              <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Status</label>
                                                    <input type="text" class="form-control"  placeholder="Physician">
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