@extends('admin-layout.content')
@section('sidebar')
@parent
Cpt Codes
@endsection
@section('content')

<!-- Form row -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Add New Cpt Code</h4>


				 {{-- {!! Form::open(['route' => 'drivertruck.store', 'method' => 'post' ]) !!} --}}
					<div class="form-group ">
						<label for="inputPassword4" class="col-form-label">Data File</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" >
								<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
							</div>
						</div>
					</div>



					<div class="form-group ">
						<div class="checkbox checkbox-success mb-2">
							<input id="checkbox3" type="checkbox">
							<label for="checkbox3">
								File has Header 
							</label>
						</div>
					<small class="text-primary">Column headers must be the following: code, description, service_type</small>
					</div>






					<button type="button" class="btn btn-info waves-effect waves-light">
						Save<span class="btn-label-right"><i class="far fa-save"></i></span>
					</button>

				</form>

			</div> <!-- end card-body -->
		</div> <!-- end card-->
	</div> <!-- end col -->
</div>
<!-- end row -->

@endsection