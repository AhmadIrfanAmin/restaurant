<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>DLV Express Restaurant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ Session::token() }}"> 
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets-restaurant/images/favicon.ico">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <!-- plugin css -->
  <link href="{{asset('public/assets-restaurant/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Plugins css -->
  <link href="{{asset('public/assets-restaurant/css/jquery.toast.min.css')}}" rel="stylesheet">
   <link href="{{asset('public/assets-restaurant/libs/jquery-toast/jquery.toast.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('public/assets-restaurant/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/switchery/switchery.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/select2/select2.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet">



  <!-- third party css -->
  
  <link href="{{asset('public/assets-restaurant/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet">
  <!-- third party css end -->
  <link href="{{asset('public/assets-restaurant/libs/summernote/summernote-bs4.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <!-- App css -->

  <link href="{{asset('public/assets-restaurant/css/bootstrap.min.css')}}" rel="stylesheet">
  @yield('styles')
  <link href="{{asset('public/assets-restaurant/css/icons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/assets-restaurant/css/app.min.css')}}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <style type="text/css">
   div.form-inline label.col-md-6{
    justify-content: flex-end;
}
  </style>
  
</head>
