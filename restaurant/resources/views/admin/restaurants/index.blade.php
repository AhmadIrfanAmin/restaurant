@extends('admin-layout.content')

@section('sidebar')

@parent

Restaurant

@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card-box">
        <a href="{{ route('restaurants.create')}}" class="btn  btn-dark waves-effect waves-light float-right">
        <span class="btn-label"><i class="fas fa-plus"></i></span>Add Restaurant
        </a>
        <h4 class="header-title mb-4">All Restaurants</h4>
        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Restaurant Address</th>
              <th>Map</th>
              <th>Contact</th>
              <th>Status</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($restaurants as $restaurant) 
              <tr>
                <td>
                  {{ $restaurant->id }}
                </td>
                <td>
                  {{ $restaurant->name }}
                </td>
                <td>
                  {{ $restaurant->address }}
                </td>
                <td>
                   <button type="button" class="btn btn-info waves-effect waves-light map-view" data-value="{{ $restaurant->id }}"><i class="fas fa-map-marked-alt"></i></button>
                </td>
                <td>
                   {{ $restaurant->contact }}
                </td>
                <td>
                  <span  class="badge badge-{{ WebHelper::get_status_class($restaurant->status) }} waves-effect waves-light ">{{ WebHelper::upperfirst($restaurant->status) }}
                </span>
                </td>
                <td>
                    <a href="{{ route('restaurants.edit',$restaurant->id) }}" class="btn btn-info waves-effect waves-light map-address btn-xs"><i class="mdi mdi-pencil"></i></a>
                    <button type="button" class="btn btn-danger waves-effect waves-light block_restaurant btn-xs" data-value="{{ $restaurant->id }}" data-status="blocked"><i class="fas fa-ban"></i>
                    </button>
                  
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
  <script type="text/javascript">
     $(document).ready(function() {
        $('.map-view').on('click',function() {

            var header = `<h3 class="pull-left" id="myModalLabel" style="margin: 0;font-weight: 600;">Restaurant Map</h3>
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
        $('.block_restaurant').on('click',function() {
         
          var restaurant_id = $(this).data('value');
          var status = $(this).data('status');

          $.ajax({
            url: "{{route('block.restaurant')}}",
            type : 'post',
            data: {restaurant_id: restaurant_id,status:status,'_token':$('meta[name=csrf-token]').attr('content')},
            dataType: "json",
            success: function(data ) {
              $.toast({ 
                text : data.response,
                bgColor : '#31b1c8',
                textColor : '#eee', 
                allowToastClose : false,
                hideAfter : 3000,
                stack : 2,                     
                textAlign : 'left',
                position : 'top-right',
                icon: 'info'
              });
              window.setTimeout(function(){location.reload()},3000)
            },
          });
        });
      });
  </script>
@stop