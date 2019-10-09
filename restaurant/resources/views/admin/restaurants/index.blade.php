@extends('admin-layout.content')

@section('sidebar')

@parent

Restaurant

@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card-box">
        <a href="{{ route('add.zone')}}" class="btn  btn-dark waves-effect waves-light float-right">
          <span class="btn-label"><i class="fas fa-plus"></i></span>Add Restaurant
      </a>
      <h4 class="header-title mb-4">All Restaurants</h4>
      <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
          <thead>
            <tr>
               <th>#</th>

               <th>Restaurant Name</th>

               <th>Show Restaurant</th>


               <th >Action</th>

           </tr>

       </thead>
       <tbody>
        {{-- @foreach($bills as $bill)  --}}
        <tr>


            <td>

            </td>
            <td>

            </td>
            <td>

            </td>

            <td>
                <div class="btn-group dropdown">
                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                        </a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete
                        </a>
                    </div>
                </div>
            </td>
        </tr>
        {{-- @endforeach --}}






    </tbody>

</table>

</div>

</div><!-- end col -->

</div>

<!-- end row-->



@endsection