@extends('admin-layout.content')

@section('content')
<div class="row">



    <div class="col-xl-3">
        <div class="card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fe-shopping-cart avatar-title font-22 text-success"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">1576</span></h3>
                        <p class="text-muted mb-1 text-truncate">January's Sales</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h6 class="text-uppercase">Target <span class="float-right">49%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                        <span class="sr-only">49% Complete</span>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div>
    <div class="col-xl-3">
        <div class="card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fe-aperture avatar-title font-22 text-purple"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span></h3>
                        <p class="text-muted mb-1 text-truncate">Income status</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div>
    <div class="col-xl-3">
        <div class="card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fe-aperture avatar-title font-22 text-purple"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span></h3>
                        <p class="text-muted mb-1 text-truncate">Income status</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->

    </div>
    
    <div class="col-xl-3">
        <div class="card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-sm bg-light rounded">
                        <i class="fe-aperture avatar-title font-22 text-purple"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span></h3>
                        <p class="text-muted mb-1 text-truncate">Income status</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->

    </div>
    <div class="col-xl-7">
    <!-- Portlet card -->
    <div class="card">
        <div class="card-body" dir="ltr">

            <h4 class="header-title mb-0">Revenue</h4>

            <div id="cardCollpase1" class="collapse pt-3 show">
                <div class="bg-soft-light">
                    <div class="row text-center">

                        <div class="col-md-6">
                            <p class="text-muted mb-0 mt-3">Current Week</p>
                            <h2 class="font-weight-normal mb-3">
                                <small class="mdi mdi-checkbox-blank-circle text-info align-middle mr-1"></small>
                                <span>$2,874.<sup class="font-13">07</sup></span>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0 mt-3">Previous Week</p>
                            <h2 class="font-weight-normal mb-3">
                                <small class="mdi mdi-checkbox-blank-circle text-danger align-middle mr-1"></small>
                                <span>$1,258.<sup class="font-13">66</sup></span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div id="apex-line-111" class="apex-charts" style="min-height: 100px !important;"></div>
            </div> <!-- collapsed end -->
        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col-->
    <div class="col-xl-5">
      <div class="card-box" dir="ltr">
        <h4 class="header-title mb-3">Donut Chart</h4>
        <div id="morris-donut-example" style="height: 350px;" class="morris-chart"></div>
        <div class="text-center">
            <p class="text-muted font-15 font-family-secondary mb-0">
                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Direct</span>

                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> 300</span>
            </p>
        </div>
    </div> <!-- end card-box-->
</div>


</div>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <button type="button" class="btn  btn-dark waves-effect waves-light float-right">
              <span class="btn-label"><i class="fas fa-plus"></i></span>Add Bill
          </button>
          <h4 class="header-title mb-4">All Bills</h4>

          <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
            <thead>
                <tr>

                   <th>Patient</th>
                   <th>Visit log</th>
                   <th>Service date</th>
                   <th>Service date 1</th>
                   <th>Service item</th>
                   <th>Process date</th>
                   <th>Cpt4</th>
                   <th>Quantity</th>
                   <th>Diagnoses</th>
                   <th >Action</th>
               </tr>
           </thead>

           <tbody>
            <tr>

                <td>
                    George A. Llanes
                </td>

                <td>
                    Support for theme
                </td>

                <td>
                    Tiger Nixon
                </td>

                <td>
                    tiger@gmail.com
                </td>

                <td>
                   Tiger Nixon
               </td>

               <td>
                 <span class="badge badge-success">Open</span>
             </td>
             <td>
                 <span class="badge badge-success">Open</span>
             </td>
             <td>
                 <span class="badge badge-success">Open</span>
             </td>

 <td>
                 <span class="badge badge-success">Open</span>
             </td>


             <td>
                <div class="btn-group dropdown">
                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>

                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>

                    </div>
                </div>
            </td>
        </tr>



    </tbody>
</table>
</div>
</div><!-- end col -->
</div>
</div>
<!-- end row -->
@endsection
@section('script-dashboard')
<!--Morris Chart-->
<script src="{{ URL::asset('public/assets/libs/morris-js/morris.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/libs/raphael/raphael.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/js/pages/apexcharts.init.js')}}"></script>
<!-- Init js -->

<script type="text/javascript">
 $(document).ready(function() {
  Morris.Donut({
  element: 'morris-donut-example',
  data: [
   {label: "Total Sales", value: 12},
      {label: "In-Store Sales", value: 30},
      {label: "Mail-Order Sales", value: 20}
  ],
  backgroundColor: '#ccc',
  labelColor: '#060',
  colors: [
    '#f0643b',
    '#56c2d6',
    '#657284'
  
  ],
  formatter: function (x) { return x + "%"}
});
  var options={chart:{height:265,type:"line",zoom:{enabled:!1},toolbar:{show:!1}},colors:["#f0643b","#56c2d6"],dataLabels:{enabled:!0},stroke:{width:[3,3],curve:"smooth"},series:[{name:"High - 2018",data:[28,29,33,36,32,32,33]},{name:"Low - 2018",data:[12,11,14,18,17,13,13]}],title:{text:"Average High & Low Temperature",align:"left",style:{fontSize:"14px",color:"#666"}},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa"},markers:{style:"inverted",size:6},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul"],title:{text:"Month"}},yaxis:{title:{text:"Temperature"},min:5,max:40},legend:{position:"top",horizontalAlign:"right",floating:!0,offsetY:-25,offsetX:-5},responsive:[{breakpoint:600,options:{chart:{toolbar:{show:!1}},legend:{show:!1}}}]};(chart=new ApexCharts(document.querySelector("#apex-line-111"),options)).render()
});
</script>
@stop