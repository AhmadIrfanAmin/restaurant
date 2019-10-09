@extends('admin-layout.content')
@section('sidebar')
@parent
Care Service Types
@endsection

@section('content')

<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add New Care Service Type</h4>


                {{-- {!! Form::open(['route' => 'drivertruck.store', 'method' => 'post' ]) !!} --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="col-form-label">Name</label>
                        <input type="text" class="form-control"  placeholder="Name" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState" class="col-form-label">Service Type</label>
                        <select class="selectpicker" data-style="btn-light">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="inputPassword4" class="col-form-label">Description</label>
                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-12">
                     <div class="table-responsive">
                        <table class="table table-dark mb-0">

                            <thead>
                                <tr>
                                    <th>MDM</th>
                                    <th>Evaluation & Man. Code</th>
                                    <th>Med. History</th>
                                    <th>Examination</th>
                                    <th>Time Boundary (start - end)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 

                                        <select class="form-control" data-style="btn-light">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>

                                    </td>
                                    <td><input  type="number" class="form-control" ></td>
                                    <td>

                                        <select class="form-control" data-style="btn-light">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" data-style="btn-light">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </td>
                                    <td> <input type="text" class="form-control" ></td>
                                    <td></td>

                                </tr>



                            </tbody>
                        </table>
                        <button type="button" class="btn  btn-dark waves-effect waves-light  add-row">
                            Add<span class="btn-label-right"><i class="fas fa-plus"></i></span>
                        </button>
                    </div>
                </div>
            </div>





            <button type="button" class="btn btn-info waves-effect waves-light mt-4">
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(document).ready(function(){

    $(".add-row").click(function(e) {
      
        var markup = '<tr style="display:none;"><td><select class="form-control" data-style="btn-light"><option>Mustard</option><option>Ketchup</option><option>Relish</option></select></td><td><input  type="number" class="form-control" ></td><td><select class="form-control" data-style="btn-light"><option>Mustard</option><option>Ketchup</option><option>Relish</option></select></td><td><select class="form-control" data-style="btn-light"><option>Mustard</option><option>Ketchup</option><option>Relish</option></select></td><td> <input type="text" class="form-control" ></td><td><button class="btn btn-sm btn-del"><i class="far fa-trash-alt"></i></button></td></tr>';
 
        $("table tbody").append(markup);
        $("table tbody").find('tr:last').fadeIn("slow","linear");
    });
    $(document).on('click','.btn-del',function() {
        $(this).closest('tr').remove();
    });
    $('tbody').sortable({
        items: 'tr',
    });
});   

</script>
@stop