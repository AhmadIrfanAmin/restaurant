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
            },'modal-remove-orange');
          });
      });
  </script>
@stop