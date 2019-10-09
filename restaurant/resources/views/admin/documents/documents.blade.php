@extends('admin-layout.content')
@section('sidebar')
@parent
Documents
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <button type="button" class="btn  btn-dark waves-effect waves-light float-right">
              <span class="btn-label"><i class="fas fa-plus"></i></span>Add Document
          </button>
          <h4 class="header-title mb-4">All Documents</h4>

          <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
            <thead>
                <tr>

                    <th>#</th>
                    <th>Location</th>
                    <th>Document</th>
                    <th>Type</th>
                    <th>File Type</th>
                    <th>Status</th>
                    <th>Uploaded By</th>
                    <th>Date</th>
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
                   <span class="badge badge-success">Open</span>
               </td>
                <td>
                   <span class="badge badge-success">Open</span>
               </td>
                <td>
                   <span class="badge badge-success">Open</span>
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