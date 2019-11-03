@extends('restaurant-layout.content')

@section('sidebar')

@parent

Order

@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mt-1 mb-3 text-danger font-weight-bold">
                    App Restaurant</h3>

                    <form  action="{{route('store.order')}}" method="post" enctype="">
                        {{csrf_field()}}
                        <div class="row align-items-center">

                            <div class="col-md-6 col-sm-12">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <label for="inputEmail4" class="col-form-label">CUSTEMER NAME</label>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-12">

                                            <input type="text" class="form-control"  placeholder="" name="customer_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                     <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">

                                            <label for="inputPassword4" class="col-form-label">LAST NAME</label>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-12">

                                            <input type="text" class="form-control"  placeholder="" name="last_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-12">

                                            <label for="inputPassword4" class="col-form-label">ADRES</label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-10">

                                            <input type="text" class="form-control customer_address"  placeholder="" name="address">
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-2 align-self-center">
                                         <i class=" fas fa-directions font-22 text-danger font-weight-bold"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">

                            <div class="col-md-6 col-sm-12 col-12">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <label for="inputEmail4" class="col-form-label">APPT</label>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-12">

                                            <input type="text" class="form-control"  placeholder="" name="appartment_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                     <div class="row">
                                        <div class="col-md-3 col-sm-4 col-12">

                                            <label for="inputPassword4" class="col-form-label">BUZZER</label>
                                        </div>
                                        <div class="col-md-9 col-sm-8 col-12">

                                            <input type="text" class="form-control"  placeholder="" name="buzzer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-12">
                                            <label for="inputEmail4" class="col-form-label">TELEPHONE*</label>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-12">

                                            <input type="text" class="form-control"  placeholder="" name="contact">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-12">
                                            <label for="inputEmail4" class="col-form-label">DISTANCE*</label>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-12">

                                            <input type="text" class="form-control show_distance"  placeholder="" name="distance" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-12">
                                            <label for="inputEmail4" class="col-form-label">ZONE</label>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-12">
                                            <select class="form-control" name="fk_zone_id">
                                                <option value="">Select</option>
                                                @foreach($zones as $zone)
                                                <option value="{{$zone->id}}">{{$zone->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-12">
                                            <label for="inputEmail4" class="col-form-label">DELIVERY PRICE</label>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-10">

                                            <input type="text" class="form-control machine_disable"  placeholder="" name="delivery_price">
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-2 align-self-center">
                                         <i class="fas fa-dollar-sign font-22  font-weight-bold"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <label for="inputEmail4" class="col-form-label">TIPS</label>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-12">

                                            <input type="text" class="form-control machine_disable"  placeholder="" name="tip">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                     <div class="row">
                                        <div class="col-6">
                                            <label for="inputPassword4" class="col-form-label">by Customer</label>
                                        </div>
                                        <div class="col-6 align-self-center">
                                            <div class="checkbox checkbox-primary ">
                                                <input id="checkbox2" type="checkbox" name="tip_by" class="machine_disable">
                                                <label for="checkbox2">
                                                    &nbsp;
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group ">
                                     <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <label for="inputPassword4" class="col-form-label">Payment methode*</label>
                                        </div>
                                        @php
                                         $url = WebHelper::get_restaurant_url(\Auth::user()->id)    
                                        @endphp
                                        @if(WebHelper::check_delivery_by_machine($url)==true)
                                        
                                        <div class="col-md-3 col-sm-3 col-6">
                                            <label for="inputPassword4" class="col-form-label">Machine</label>
                                            
                                        </div>
                                       
                                        <div class="col-md-5 col-sm-5 col-6  align-self-center">
                                            <div class="checkbox checkbox-primary ">
                                                <input id="checkbox3" type="checkbox" name="payment_method" class="check_machine">
                                                <label for="checkbox3">
                                                    &nbsp;
                                                </label>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <label for="inputPassword4" class="col-form-label "></label>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-6">
                                            <label for="inputPassword4" class="col-form-label ">Cash by Costemer</label>
                                            
                                        </div>
                                       
                                        <div class="col-md-2 col-sm-2 col-6  align-self-center">
                                            <div class="checkbox checkbox-primary ">
                                                <input id="checkbox4" type="checkbox" name="payment_method" class="customer_cash">
                                                 <label for="checkbox4">
                                                    &nbsp;
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-1 col-6 mt-md-0 mt-sm-0 mt-2 align-self-center">
                                            <label>order price</label>
                                        </div>
                                         
                                        <div class="col-md-2 col-sm-2 col-6 mt-md-0 mt-sm-0 mt-2">
                                            <input type="text" class="form-control order_price machine_disable"  placeholder="" name="order_price">
                                        </div>
                                    </div>
                                </div>
                               

                                
                           
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group ">
                                     <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <label for="inputPassword4" class="col-form-label"></label>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-6">
                                            <label for="inputPassword4" class="col-form-label ">Cash at restaurant</label>
                                            
                                        </div>
                                       
                                        <div class="col-md-5 col-sm-5 col-6  align-self-center">
                                            <div class="checkbox checkbox-primary ">
                                                <input id="checkbox6" type="checkbox" name="payment_method" class="machine_disable restaurant_cash">
                                                <label for="checkbox6">
                                                    &nbsp;
                                                </label>
                                            </div>
                                        </div>
                                         
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                         <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-12">
                                            <label for="inputEmail4" class="col-form-label">Notes</label>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-12">
                                            <textarea class="form-control"  placeholder="" name="notes" rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <select class="form-control" name="pickup_time">
                                                <option value="">Remote Pickup time</option>
                                               
                                                <option value="10">10 Mints</option>
                                                <option value="15">15 Mints</option>
                                                <option value="20">20 Mints</option>
                                               
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-12 mt-md-0 mt-sm-0 mt-2">
                                             <button type="submit" class="btn btn-success  waves-effect waves-light">
                                                Order Now
                                                <span class="btn-label-right"><i class="far fa-save"></i></span>
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-12 mt-md-0 mt-sm-0 mt-2">
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">
                                                Schedule
                                                <span class="btn-label-right"><i class="far fa-calendar-alt"></i></span>
                                            </button>
                                          
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $restaurant_info = WebHelper::get_restaurant_lat_long($url)    
                        @endphp
                        <input type="hidden" class="restaurant_location" value="{{$restaurant_info->latitude}}"
                         data-value="{{$restaurant_info->longitude}}"> 

                    </form>

                </div> <!-- end card-body -->

            </div> <!-- end card-->

        </div> <!-- end col -->

    </div>

@endsection
@section('script-dashboard')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAztLRM2c-6I3w681cHGtNQgjLVzmIQdt0&libraries=geometry"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.customer_address').on('focusout',function() {
                var address = $(this).val();
                var restaurant_lat = $('.restaurant_location').val();
                var restaurant_long = $('.restaurant_location').data('value');
                $.ajax({
                    url: "{{route('customer.location')}}",
                    type : 'post',
                    data: {address: address,'_token':$('meta[name=csrf-token]').attr('content')},
                    dataType: "json",
                    success: function(data) {
                        if(data.type == 'success') {
                        var p1 = new google.maps.LatLng(data.lat, data.long);
                        var p2 = new google.maps.LatLng(restaurant_lat, restaurant_long);
                        $('.show_distance').val(calc_distance(p1,p2)+' '+'km');
                        } else if(data.type == 'error') {
                            return false;
                        }
                    },
                });
            });
            $('.check_machine').on('click',function() {
                if($('.customer_cash').is(":checked")) {
                    $(".order_price").attr("required", !this.checked);
                 }
                $(".machine_disable").attr("disabled", this.checked); 
            });
            $('.customer_cash').on('click',function() {
                if($('.check_machine').is(":checked")) {
                    $(".order_price").attr("disabled", this.checked); 
                } else {
                    $(".order_price").attr("required", this.checked);   
                }
                $(".restaurant_cash").attr("disabled", this.checked); 
            });
            $('.restaurant_cash').on('click',function() {
                if($('.check_machine').is(":checked")) {
                    $(".order_price").attr("disabled", this.checked); 
                } else {
                    $(".order_price").attr("required", this.checked);   
                }
                $(".restaurant_cash").attr("disabled", this.checked); 
            });
        });

        function calc_distance(p1, p2) {
                return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);
        }
    </script>

@stop
