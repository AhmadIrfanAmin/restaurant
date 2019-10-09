@extends('admin-layout.content')
@section('sidebar')
@parent
Log Manager
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
           
          <h4 class="header-title mb-4">Preview, download and delete logs.</h4>

          <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
            <thead>
                <tr>

                  <th>#</th>
                  <th>File name</th>
                  <th>Date</th>
                  <th>Last modified</th>
                  <th>File size</th>

                  <th>Actions</th>
              </tr>
          </thead>

          <tbody>
            <tr>

                <td>
                    George A. Llanes
                </td>

                <td>
                    Support for theme
                </td>

                <td>
                    Tiger Nixon
                </td>

                <td>
                    tiger@gmail.com
                </td>

                <td>
                   Tiger Nixon
               </td>






             <td>
                <div class="btn-group dropdown">
                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>

                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>

                    </div>
                </div>
            </td>
        </tr>



    </tbody>
</table>
</div>
</div><!-- end col -->
</div>


@endsection