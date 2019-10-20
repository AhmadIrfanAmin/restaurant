@extends('restaurant-layout.content')

@section('content')
  <div class="row" id="dashboard-order">
    
  </div>

@endsection
@section('script-dashboard')
  <!--Morris Chart-->
  <script src="{{ URL::asset('public/assets-restaurant/libs/morris-js/morris.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets-restaurant/libs/raphael/raphael.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets-restaurant/js/pages/apexcharts.init.js')}}"></script>
  <!-- Init js -->
  <script>

    $(document).ready(function(){ 
       order_dashboard_view();
      $("#tickets-table2").DataTable({
            language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",
            next:"<i class='mdi mdi-chevron-right'>"}},
            drawCallback:function(){
              $(".dataTables_paginate > .pagination").addClass("pagination-rounded")}
            });
      $(document).on('click','.refresh-order',function() { 
        order_dashboard_view();
      });
    });
    
    function order_dashboard_view() {
      $.ajax({
        url: "{{route('dashboard.order')}}",
        type : 'get',
        dataType: "json",
        success: function(data ) {
          
          $('#dashboard-order').html(data.response);
          $("#tickets-table2").DataTable({
            language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",
            next:"<i class='mdi mdi-chevron-right'>"}},
            drawCallback:function(){
              $(".dataTables_paginate > .pagination").addClass("pagination-rounded")}
            });
        },
      });
    }
  </script>
@stop