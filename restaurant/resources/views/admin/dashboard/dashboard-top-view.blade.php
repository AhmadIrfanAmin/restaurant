
  <div class="col-xl-3">
    <div class="card-box">
      <div class="row">
        <div class="col-6">
          <div class="avatar-sm bg-light rounded">
            <i class="fas fa-hourglass-start avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('pending')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Pending</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Orders <span class="float-right">49%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
            <i class="fas fa-check-circle avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('assigned')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Assigned</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
            <i class="fas fa-hourglass-end avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('complete')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Completed</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
            <i class="far fa-trash-alt avatar-title font-22 text-purple"></i>
          </div>
        </div>
        <div class="col-6">
          <div class="text-right">
            <h3 class="text-dark my-1"><span data-plugin="counterup">{{WebHelper::count_orders('canceled')}}</span></h3>
            <p class="text-muted mb-1 text-truncate">Canceled</p>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
        <div class="progress progress-sm m-0">
          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>
      </div>
    </div> <!-- end card-box-->

  </div>