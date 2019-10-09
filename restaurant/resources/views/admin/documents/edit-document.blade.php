@extends('admin-layout.content')
@section('sidebar')
@parent
Documents
@endsection
@section('content')

<!-- Form row -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Add New Document</h4>


				  {{--  {!! Form::model($goodType,['route' => ['goodtypes.update',$goodType->id], 'method' => 'PATCH']) !!} --}}
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Location</label>
							<select class="selectpicker" data-live-search="true"  data-style="btn-light">
								<option>Hot Dog, Fries and a Soda</option>
								<option>Burger, Shake and a Smile</option>
								<option>Sugar, Spice and all things nice</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4" class="col-form-label">Document Type</label>
							<select class="selectpicker" data-style="btn-light">
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>
					<div class="form-group ">
						<label for="inputPassword4" class="col-form-label">Document File</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" >
								<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-info waves-effect waves-light">
						Update<span class="btn-label-right"><i class="far fa-save"></i></span>
					</button>

				 {{-- {!! Form::close() !!} --}}

			</div> <!-- end card-body -->
		</div> <!-- end card-->
	</div> <!-- end col -->
</div>
<!-- end row -->

@endsection