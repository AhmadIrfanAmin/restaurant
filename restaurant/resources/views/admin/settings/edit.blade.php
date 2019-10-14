@extends('admin-layout.content')

@section('sidebar')

@parent

Setting

@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Admin Setting</h4>
                    <form role="form" method="POST" id="submit_form" action="{{route('update.settings')}}" >
                        {{csrf_field()}}

                        @foreach ($settings as $setting)

                        <div class="form-group">
                            <label class="col-form-label">{{WebHelper::upperfirst($setting->name)}}</label>
                           
                                <input type="text" class="form-control" required="required" name="key[]" value="{{$setting->key}}" >
                                 <input type="hidden" value="{{$setting->name}}" name="name[]"/> 
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



