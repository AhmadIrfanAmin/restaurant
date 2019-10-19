@extends('admin-layout.content')



@section('sidebar')



@parent



Restaurant



@endsection



@section('content')



    <div class="row">

        <div class="col-12">



            <div class="card">

                <div class="card-body">

                    <h4 class="header-title">Update Restaurant</h4>

                    <form  action="{{route('restaurants.update',$restaurant->id)}}" method="post" enctype="multipart/form-data"><!-- Form row -->

                            {{csrf_field()}}



                        <div class="form-group ">

                            <label  class="col-form-label">Restaurant Name</label>

                            <input type="text" class="form-control" name="name" value="{{ $restaurant->name }}">

                        </div>
                        <div class="form-group ">

                            <label  class="col-form-label">Username</label>

                            <input type="text" class="form-control" name="username" value="{{ $restaurant->username }}">

                        </div>
                        <div class="form-group ">

                            <label  class="col-form-label">Password</label>

                            <input type="text" class="form-control" name="password">

                        </div>



                        <div class="form-group ">

                            <label for="inputPassword4" class="col-form-label">Restaurant Address</label>

                            <input type="text" class="form-control" name="address" value="{{ $restaurant->address }}">

                        </div>

                        <div class="form-group ">

                            <label class="col-form-label">Logo</label>

                            <input type="file" class="form-control" name="photo">

                        </div>

                         <div class="form-group ">

                            <label for="inputPassword4" class="col-form-label">Contact</label>

                            <input type="text" class="form-control" name="contact" value="{{ $restaurant->contact }}">

                        </div>

                        <div class="form-group">

                            <label  class="col-form-label">Status</label>

                            <select class="selectpicker" data-style="btn-light" name="status">
                                 @php
                                $restaurant_status=['active','inactive'];
                                @endphp

                                 <option value="">Select</option>
                                @foreach($restaurant_status as $status)
                                <option value="{{ $status }}" {{ $status == $restaurant->status ? 'selected' : '' }}>{{ WebHelper::upperfirst($status) }}</option>
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







