@extends('admin-layout.content')

@section('sidebar')

@parent

Zone

@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update Zone</h4>
                    <form  action="{{route('update.zone',$zone->id)}}" method="post"><!-- Form row -->
                        {{csrf_field()}}

                        <div class="form-group ">
                            <label  class="col-form-label">Zone Name</label>
                            <input type="text" class="form-control"   name="name" value="{{ $zone->name }}">
                        </div>

                        <div class="form-group ">
                            <label for="inputPassword4" class="col-form-label">Zone List</label>
                            <textarea class="form-control" rows="10"  name="route_list">{{ $get_zone }}</textarea>
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Status</label>
                            <select class="selectpicker" data-style="btn-light" name="status">
                                @php
                                $zone_status=['active','inactive'];
                                @endphp
                                <option value="">Select</option>
                                @foreach($zone_status as $status)
                                <option value="{{ $status }}" {{ $status == $zone->status ? 'selected' : '' }}>{{ WebHelper::upperfirst($status) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info waves-effect waves-light">
                            Update
                            <span class="btn-label-right"><i class="fas fa-plus-circle"></i>
                            </span>

                        </button>
                    </form>
                </div> <!-- end card-body -->

            </div> <!-- end card-->

        </div> <!-- end col -->

    </div>

    <!-- end row -->



@endsection



