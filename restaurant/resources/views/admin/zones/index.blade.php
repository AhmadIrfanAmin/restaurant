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
             <th>Show Zone</th>
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
                  <button type="button" class="btn btn-info waves-effect waves-light map-view" data-value="{{ $zone->id }}"><i class="fas fa-map"></i></button>
                </td>
                <td>
                  <button type="button" class="btn btn-{{ WebHelper::get_status_class($zone->status) }} btn-xs waves-effect waves-light ">{{ WebHelper::upperfirst($zone->status) }}
                  </button>
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

       function modal(header, body, footer, size, center, callback,classes) {
        header = header !== undefined ? header : 'Modal header';
        body = body !== undefined ? body : 'Modal body';
        footer = footer !== undefined ? footer : 'Modal footer';
        center = center !== undefined ? 'modal-dialog-centered' : '';
        size = size !== undefined ? size : '';
        classes = classes !== undefined ? classes : '';
        let closeBtn = `<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>`;

        let $modalId = new Date().getSeconds();
        let $modal = `<div class="modal fade ${classes}" tabindex="-1" role="dialog" id="modal-${$modalId}">
          <div class="modal-dialog ${center} ${size}" role="document">
            <div class="modal-content border-orange">
              <div class="modal-header">
                ${header}${closeBtn}
              </div>
              <div class="modal-body">
                ${body}
              </div>
              <div class="modal-footer">
                ${footer}
              </div>
            </div>
          </div>
        </div>`;

          $(document.body).append($modal);
          $('#modal-'+$modalId).modal('show');

          $(document).on('hidden.bs.modal', '#modal-'+$modalId, function(e) {
            $('#modal-'+$modalId).remove();
          });
          if (callback !== undefined && typeof callback == 'function') {
            return callback('modal-'+$modalId);
          }
        }
      });

  </script>
  <script type="text/javascript">
    $(document).ready(function() {
     
    });



      
  </script>
@stop