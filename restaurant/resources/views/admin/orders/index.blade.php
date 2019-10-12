@extends('admin-layout.content')

@section('sidebar')

@parent

Order

@endsection

@section('content')
  <div class="row">
        <div class="col-12">
          <div class="card-box">
                <h4 class="header-title mb-4">All Orders</h4>
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
  </div>

    <!-- end row-->

@endsection
@section('script-dashboard')
