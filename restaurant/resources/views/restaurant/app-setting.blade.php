@extends('restaurant-layout.content')

@section('sidebar')

@parent

App Setting

@endsection

@section('content')



 <!-- Form row -->

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">

                                        <h4 class="header-title">App Settings</h4>

                                       



                                        <form  action="#" method="post" enctype=""><!-- Form row -->

                                          

                                          

                                                <div class="form-group ">

                                                    <label for="inputEmail4" class="col-form-label">Radius</label>

                                                    <input type="text" class="form-control"  placeholder="Radius" name="radius">

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
@section('script-dashboard')
<script type="text/javascript">
    


</script>
@stop
