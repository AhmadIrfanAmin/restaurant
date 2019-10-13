@extends('admin-layout.content')

@section('sidebar')

@parent

Delivery

@endsection

@section('content')
  <div class="row">
        <div class="col-12">
          <div class="card-box">
                <h4 class="header-title mb-4">Delivery Boys</h4>
                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                  <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
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

    <!-- end row-->

@endsection
@section('script-dashboard')
  <script type="text/javascript">
     $(document).ready(function() {
        $('.map-address').on('click',function() {

            var header = `<h3 class="pull-left" id="myModalLabel" style="margin: 0;font-weight: 600;">Address Map</h3>
                <i  class="pull-right fa fa-bank class-fa"></i>`;
      
            var user_id = $(this).data('value');
            modal(header,'loading','','',false,function(modal_Id) {
              $.ajax({
                url: "{{route('delivery-boys.map')}}",
                type : 'post',
                data: {user_id: user_id,'_token': $('meta[name=csrf-token]').attr('content')},
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
