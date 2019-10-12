@extends('admin-layout.content')

@section('sidebar')

@parent

Order

@endsection

@section('content')
  <div class="row">
        <div class="col-12">
          <div class="card-box">
                <h4 class="header-title mb-4">Order Detail</h4>
                <div class="table-responsive">
                	<table class="table table-striped ">
                		<tbody>
                			<tr>
                				<th>Address</th>
                				<td>{{$order_detail->address}}</td>
                			</tr>
                             <tr>
                                <th>Restaurant Map</th>
                                <td><button type="button" class="btn btn-primary waves-effect waves-light map-view btn-xs" data-value="{{ $order_detail->fk_restaurant_id }}"><i class="fas fa-map-marker-alt"></i></button></td>
                            </tr>
                            <tr>
                                <th>Distance</th>
                                <td>{{$order_detail->distance}}</td>
                            </tr>
                			<tr>
                				<th>Appartment No</th>
                				<td>{{$order_detail->appartment_no}}</td>
                			</tr>
                			<tr>
                				<th>Buzzer</th>
                				<td>{{$order_detail->buzzer}}</td>

                			</tr>
                			<tr>
                				<th>Contact</th>
                				<td>{{$order_detail->contact}}</td>
                			</tr>
                			<tr>
                				<th>Delivery Price</th>
                				<td>{{$order_detail->delivery_price}}</td>

                			</tr>
                			<tr>
                				<th>Tip</th>
                				<td>{{$order_detail->tip}}</td>
                			</tr>
                			<tr>
                				<th>Tip By</th>
                				<td>{{ WebHelper::upperfirst($order_detail->tip_by) }}</td>

                			</tr>
                			<tr>
                				<th>Payment Method</th>
                				<td>{{ WebHelper::upperfirst($order_detail->payment_method) }}</td>
                			</tr>
                			<tr>
                				<th>Zone Map</th>
                				<td><button type="button" class="btn btn-info waves-effect waves-light zone-view btn-xs" data-value="{{ $order_detail->fk_zone_id }}"><i class="fas fa-map-marked-alt"></i></button></td>

                			</tr>
                			
                		</tbody>
                	</table>
                </div>
                
          </div>
        </div><!-- end col -->
  </div>

    <!-- end row-->

@endsection
@section('script-dashboard')
  <script type="text/javascript">
     $(document).ready(function() {
        $('.zone-view').on('click',function() {

            var header = `<h3 class="pull-left" id="myModalLabel" style="margin: 0;font-weight: 600;">Map Zone</h3>
                <i  class="pull-right fa fa-bank class-fa"></i>`;
      
            var zone_id = $(this).data('value');
            modal(header,'loading','','',false,function(modal_Id) {
              $.ajax({
                url: "{{route('show.zone')}}",
                type : 'post',
                data: {zone_id: zone_id,'_token': $('meta[name=csrf-token]').attr('content')},
                dataType: "json",
                success: function(data ) {
                  $('#'+modal_Id).find('.modal-body').html(data.response);
                  
                },
              });
            });
          });
        $('.map-view').on('click',function() {

            var header = `<h3 class="pull-left" id="myModalLabel" style="margin: 0;font-weight: 600;">Map Zone</h3>
                <i  class="pull-right fa fa-bank class-fa"></i>`;
      
            var restaurant_id = $(this).data('value');
            modal(header,'loading','','',false,function(modal_Id) {
              $.ajax({
                url: "{{route('restaurant.map')}}",
                type : 'post',
                data: {restaurant_id: restaurant_id,'_token': $('meta[name=csrf-token]').attr('content')},
                dataType: "json",
                success: function(data ) {
                  $('#'+modal_Id).find('.modal-body').html(data.response);
                  
                },
              });
            });
          });

      });
  </script>
@stop
