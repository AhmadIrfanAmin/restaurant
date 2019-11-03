     <div class="col-12">
          <div class="card-box">
             <a href="{{ route('create.order',['url'=> $resta_url ])}}" class="btn  btn-dark waves-effect waves-light float-right">
              <span class="btn-label"><i class="fas fa-plus"></i></span>Create Order
            </a>
             <button type="button" class="btn btn-dark waves-effect waves-light float-right refresh-order">
              <span class="btn-label"><i class="fas fa-sync-alt"></i></span>Refresh Order
            </button>

                <h4 class="header-title mb-4">Orders</h4>
                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table2">
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
                        @foreach($get_orders as $order) 
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
                                 
                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light " ><i class="fas fa-info-circle"></i>Ask Deliver</button>
                                </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
          </div>
        </div><!-- end col -->