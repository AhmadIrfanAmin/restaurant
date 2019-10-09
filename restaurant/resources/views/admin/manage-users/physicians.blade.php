@extends('admin-layout.content')
@section('sidebar')
@parent
Physicians
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <a href="{{ url('admin/physician/add') }}" class="btn  btn-dark waves-effect waves-light float-right">
                  <span class="btn-label"><i class="fas fa-plus"></i></span>Add Physicians
            </a>
            <h4 class="header-title mb-4">All Physicians</h4>

            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Locations </th>
                        <th>Status</th>

                        <th class="hidden-sm">Action</th>
                    </tr>
                </thead>

                  <tbody>
                      @foreach($physicians as $physician) 
                        <tr>
                            <td>
                                {{$physician->id}}
                            </td>
                            <td>
                                {{$physician->firstname}}
                            </td>
                            <td>
                                {{$physician->lastname}}
                            </td>
                            <td>
                                {{$physician->email}}
                            </td>
                            <td>
                                @foreach ($physician->locations as $location)     
                                {{ $location->name  }}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                <span class="badge {{ Bchelper::get_status_class($physician->status) }}">{{ Bchelper::get_status($physician->status) }}</span>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- end col -->
</div>

@endsection