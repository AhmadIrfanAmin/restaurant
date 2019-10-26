@extends('restaurant-layout.content')

@section('sidebar')

@parent

Setting

@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Settings</h4>
                    <form  method="post" id="submit_form" action="{{route('restaurant.settings',['url'=> WebHelper::get_restaurant_url(\Auth::user()->id)])}}" >
                         {{csrf_field()}}

                        @foreach ($settings as $setting)
                             <div class="form-group">
                            {{ WebHelper::input_helper($setting->meta_label, $setting->meta_key, $setting->meta_value, $setting->meta_input) }}
                            </div>
                         @endforeach
                       

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



