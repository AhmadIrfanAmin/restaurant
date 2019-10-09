@extends('admin-layout.content')
@section('sidebar')
@parent
Locations
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <a href="{{ url('admin/location/add') }}"  class="btn  btn-dark waves-effect waves-light float-right">
                    <span class="btn-label"><i class="fas fa-plus"></i></span>Add Location
                </a>
                <h4 class="header-title mb-4">All Locations</h4>
                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                    <thead>
                            <tr>

                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>City</th>
                                <th>State </th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Date </th>
                                <th>Action</th>
                            </tr>
                    </thead>

                    <tbody>
                        @foreach($locations as $location) 
                                <tr>
                                    <td>
                                        {{$location->id}}
                                    </td>
                                    <td>
                                        {{$location->name}}
                                    </td>
                                    <td>
                                        {{$location->code}}
                                    </td>
                                    <td>
                                        {{$location->city}}
                                    </td>
                                    <td>
                                       {{$location->state}}
                                    </td>

                                    <td>
                                        <span class="badge {{ Bchelper::get_status_class($location->status) }}">{{ Bchelper::get_status($location->status) }}</span>
                                    </td>
                                    <td>
                                       {{$location->created_by}}
                                    </td>
                                     <td>
                                       {{ Bchelper::print_date($location->created_at) }}
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