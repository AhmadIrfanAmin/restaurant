@extends('admin-layout.content')

@section('sidebar')

@parent

Zone

@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card-box">
        <a href="{{ route('add.zone')}}" class="btn  btn-dark waves-effect waves-light float-right">
        <span class="btn-label"><i class="fas fa-plus"></i></span>Add Zone
        </a>
        <h4 class="header-title mb-4">All Zones</h4>
        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Zone Name</th>
              <th>Show Map</th>
              <th>Status</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($zones as $zone) 
              <tr>
                <td>
                  {{ $zone->id }}
                </td>
                <td>
                  {{ $zone->name }}
                </td>
                <td>
                  <button type="button" class="btn btn-info waves-effect waves-light map-view" data-value="{{ $zone->id }}"><i class="fas fa-map-marked-alt"></i></button>
                </td>
                <td>
                  <span  class="badge badge-{{ WebHelper::get_status_class($zone->status) }} waves-effect waves-light ">{{ WebHelper::upperfirst($zone->status) }}
                </span>
                </td>
                <td>
                    <a href="{{route('edit.zone', ['zone' => $zone->id])}}" class="btn btn-info waves-effect waves-light map-address btn-xs"><i class="mdi mdi-pencil"></i></a>
                     <button type="button" class="btn btn-danger waves-effect waves-light block_zone btn-xs" data-value="{{ $zone->id }}" data-status="blocked"><i class="fas fa-ban"></i>
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
            },'modal-remove-orange');
          });
          $('.block_zone').on('click',function() {

            var zone_id = $(this).data('value');
            var status = $(this).data('status');

            $.ajax({
                url: "{{route('block.zone')}}",
                type : 'post',
                data: {zone_id: zone_id,status:status,'_token':$('meta[name=csrf-token]').attr('content')},
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