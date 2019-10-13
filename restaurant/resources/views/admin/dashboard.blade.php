@extends('admin-layout.content')

@section('content')
<div class="row">

  <div class="col-xl-3">
    <div class="card-box">
      <div class="row">
        <div class="col-6">
          <div class="avatar-sm bg-light rounded">
            <i class="fas fa-hourglass-start avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('pending')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Pending</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Orders <span class="float-right">49%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">49% Complete</span>
          </div>
        </div>
      </div>
    </div> <!-- end card-box-->
  </div>
  <div class="col-xl-3">
    <div class="card-box">
      <div class="row">
        <div class="col-6">
          <div class="avatar-sm bg-light rounded">
            <i class="fas fa-check-circle avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('assigned')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Assigned</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
      </div>
    </div> <!-- end card-box-->
  </div>
  <div class="col-xl-3">
    <div class="card-box">
      <div class="row">
        <div class="col-6">
          <div class="avatar-sm bg-light rounded">
            <i class="fas fa-hourglass-end avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('complete')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Completed</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
      </div>
    </div> <!-- end card-box-->

  </div>

  <div class="col-xl-3">
    <div class="card-box">
      <div class="row">
        <div class="col-6">
          <div class="avatar-sm bg-light rounded">
            <i class="far fa-trash-alt avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('canceled')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Canceled</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
      </div>
    </div> <!-- end card-box-->

  </div>

</div><!-- end row -->
 <div class="row">
        <div class="col-6">
          <div class="card-box">
                <h4 class="header-title mb-4">Assigned Orders</h4>
                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                  <thead>
                        <tr>
                          <th>#</th>
                          <th>Customer Name</th>
                          <th>Driver Name</th>
                          <th>Order Price</th>
                          <th>Restaurant</th>
                          <th>Status</th>
                          <th >Action</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach($orders as $order) 
                          <tr>
                                <td>
                                    {{ $order->id }}
                                </td>
                                <td>
                                    {{ $order->customer_name }}
                                </td>
                                <td>
                                    {{ $order->customer_name }}
                                </td>
                                <td>
                                    {{ $order->contact }}
                                </td>
                                <td>
                                    {{ WebHelper::get_restaurant_name($order->fk_restaurant_id) }}
                                </td>
                                <td>
                                  <span  class="badge badge-{{ WebHelper::get_order_status($order->status) }} waves-effect waves-light ">{{ WebHelper::upperfirst($order->status) }}
                                  </span>
                                </td>
                                <td>
                                   {{--  <button type="button" class="btn btn-info btn-xs waves-effect waves-light"><i class="mdi mdi-heart-half-full"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-heart-half-full"></i></button> --}}
                                    <a href="{{route('view.order',$order->id)}}" class="btn btn-purple btn-xs waves-effect waves-light view-order" ><i class="fas fa-info-circle"></i></a>
                                </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
          </div>
        </div><!-- end col -->
        <div class="col-6">
           <div class="card-box">
                <h4 class="header-title mb-4">Delivery Boys</h4>
                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table2">
                  <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Contact</th>
                          <th>Permanent Address</th>
                          <th>Address Map</th>
                          
                        </tr>
                  </thead>
                  <tbody>
                        @foreach($delivery_boys as $delivery_boy) 
                          <tr>
                                 <td>
                                  {{ $delivery_boy->id }}
                                </td>
                                <td>
                                  {{ $delivery_boy->name }}
                                </td>
                                <td>
                                  {{ $delivery_boy->email }}
                                </td>
                                <td>
                                    <span  class="badge badge-{{ WebHelper::get_status_class($delivery_boy->status) }} waves-effect waves-light ">{{ WebHelper::upperfirst($delivery_boy->status) }}
                                  </span>
                                </td>
                                <td>
                                  {{ $delivery_boy->contact }}
                                </td>
                                <td>
                                  {{ $delivery_boy->permanent_address }}
                                </td>
                                <td>
                                   <button type="button" class="btn btn-info waves-effect waves-light map-address btn-xs" data-value="{{ $delivery_boy->id }}"><i class="fas fa-map-marker-alt"></i></button>
                                </td>
                               
                                
                          </tr>
                        @endforeach
                    </tbody>
                </table>
          </div>
        </div><!-- end col -->
  </div>
@endsection
@section('script-dashboard')
<!--Morris Chart-->
<script src="{{ URL::asset('public/assets/libs/morris-js/morris.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/libs/raphael/raphael.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/js/pages/apexcharts.init.js')}}"></script>
<!-- Init js -->

@stop