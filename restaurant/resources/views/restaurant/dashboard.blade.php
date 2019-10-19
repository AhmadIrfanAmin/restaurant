@extends('restaurant-layout.content')

@section('content')
<div class="row" id="dashboard-top">


</div><!-- end row -->
 <div class="row" id="dashboard-bottom">
       
  </div>
@endsection
@section('script-dashboard')
<!--Morris Chart-->
<script src="{{ URL::asset('public/assets-restaurant/libs/morris-js/morris.min.js')}}"></script>
<script src="{{ URL::asset('public/assets-restaurant/libs/raphael/raphael.min.js')}}"></script>
<script src="{{ URL::asset('public/assets-restaurant/js/pages/apexcharts.init.js')}}"></script>
<!-- Init js -->
<script>

  top_dashboard_view(); //first time order show
  bottom_dashboard_view();
  function top_dashboard_view(){
    $.ajax({
        url: "{{route('dashboard.top')}}",
        type : 'get',
        dataType: "json",
        success: function(data ) {
          $('#dashboard-top').html(data.response);
        },
      });
    }
  function bottom_dashboard_view(){
    $.ajax({
      url: "{{route('dashboard.bottom')}}",
      type : 'get',
      dataType: "json",
      success: function(data ) {
        $('#dashboard-bottom').html(data.response);
      },
    });
  }

  setInterval(function(){
      top_dashboard_view(); // this will run after every 1 mint
      bottom_dashboard_view();
    }, 100000);
</script>
@stop