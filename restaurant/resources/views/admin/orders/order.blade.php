@extends('admin-layout.content')

@section('sidebar')

@parent

Orders

@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card-box">
        <a href="#" class="btn  btn-dark waves-effect waves-light float-right">
          <span class="btn-label"><i class="fas fa-history"></i></span>Check History
        </a>
        <h4 class="header-title mb-4">All Orders</h4>
        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
          <thead>
            <tr>
             <th>Patient</th>

             <th>Visit log</th>

             <th>Service date</th>

             <th>Service date 1</th>

             <th>Service item</th>

             <th>Process date</th>

             <th>Cpt4</th>

             <th>Quantity</th>

             <th>Diagnoses</th>

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
                               
                            </td>
                           {{--  <td>
                               {{ $bill->service_item }}
                            </td> --}}
                            <td>
                            
                            </td>
                            <td>
                              
                            </td>
                            <td>
                               
                            </td>
                            <td>
                               {{--  {{ $bill->diagnoses }} --}}
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