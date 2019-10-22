@extends('restaurant-layout.content')

@section('sidebar')

@parent

Order

@endsection

@section('content')



 <!-- Form row -->

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">

                                        <h4 class="header-title">Add New Order</h4>

                                       



                                        <form  action="{{route('store.order')}}" method="post" enctype=""><!-- Form row -->

                                            {{csrf_field()}}

                                            <div class="form-row">

                                                <div class="form-group col-md-6">

                                                    <label for="inputEmail4" class="col-form-label">Customer Name</label>

                                                    <input type="text" class="form-control"  placeholder="Customer Name" name="customer_name">

                                                </div>

                                                <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Address</label>

                                                    <input type="text" class="form-control"  placeholder="Address" name="address">

                                                </div>

                                            </div>

                                                 <div class="form-row">

                                                    <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Last Name</label>

                                                    <input type="text" class="form-control"  placeholder="Last Name" name="last_name">

                                                </div>

                                                <div class="form-group col-md-6">

                                                    <label for="inputEmail4" class="col-form-label">Pick Up Time</label>

                                                    <input type="text" class="form-control pickup_time"  placeholder="Pick Up Time" name="pickup_time">

                                                </div>

                                                

                                            </div>

                                               

                                               

                                                 <div class="form-row">

                                                    <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Appt</label>

                                                    <input type="text" class="form-control"  placeholder="Appt" name="appartment_no">

                                                </div>

                                                <div class="form-group col-md-6">

                                                    <label for="inputEmail4" class="col-form-label">Buzzer</label>

                                                    <input type="text" class="form-control"  placeholder="Buzzer" name="buzzer">

                                                </div>

                                                

                                            </div>



                                            <div class="form-row">

                                                <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Telephone</label>

                                                    <input type="text" class="form-control"  placeholder="Telephone" name="contact">

                                                </div>

                                              <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Distance</label>

                                                    <input type="text" class="form-control"  placeholder="Distance" name="distance">

                                                </div>

                                            </div>



                                                <div class="form-row">

                                                <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Zone</label>

                                                <select class="form-control" name="fk_zone_id">
                                                    <option value="">Select</option>
                                                    @foreach($zones as $zone)
                                                    <option value="{{$zone->id}}">{{$zone->name}}</option>
                                                    @endforeach
                                                </select>

                                                </div>

                                                <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Delivery Price</label>

                                                    <input type="text" class="form-control"  placeholder="Delivery Price" name="delivery_price" >

                                                </div>

                                              
                                            </div>



                                               <div class="form-row align-items-center">

                                                 <div class="form-group col-md-6">

                                                    <label for="inputPassword4" class="col-form-label">Tip</label>

                                                    <input type="text" class="form-control"  placeholder="Tip" name="tip">

                                                </div>

                                             <div class="form-group col-md-6 mt-4 pt-2">

                                                <div class="checkbox checkbox-primary mb-2">
                                                    <input id="checkbox1" type="checkbox" name="tip_by">
                                                    <label for="checkbox1">
                                                        By Customer
                                                    </label>
                                                </div>

                                                </div>
                                            </div>

                                           

                                        

                                            <div class="form-row align-items-center">

                                              <div class="form-group col-md-6">

                                                <label for="inputPassword4" class="col-form-label">Payment methode machine</label>

                                                </div>

                                              <div class="form-group col-md-6">

                                                    <div class="radio radio-primary mb-2">
                                                        <input type="radio" name="payment_method" id="radio3" value="option3">
                                                        <label for="radio3">
                                                            &nbsp;
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-row align-items-center">

                                              <div class="form-group col-md-4">

                                                    <label for="inputPassword4" class="col-form-label">Cash By Customer</label>

                                                    



                                                </div>

                                              <div class="form-group col-md-2  mt-3">

                                                    <div class="radio radio-primary mb-2">
                                                        <input type="radio" name="payment_method" id="radio2" value="option3">
                                                        <label for="radio2">
                                                            &nbsp;
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="form-group col-md-6">

                                                    <input type="text" class="form-control"  placeholder="$ Order Price" name="order_price">

                                                </div>
                                            </div>
                                            <input type="hidden" value="{{Auth::user()->id}}" name="fk_restaurant_id">

                                          
                                         <button type="submit" class="btn btn-info waves-effect waves-light">

                                                    Create Order<span class="btn-label-right"><i class="far fa-save"></i></span>
                                        </button>
                                       



                                        </form>



                                    </div> <!-- end card-body -->

                                </div> <!-- end card-->

                            </div> <!-- end col -->

                        </div>

                        <!-- end row -->



@endsection
@section('script-dashboard')
<script type="text/javascript">
    


</script>
@stop
