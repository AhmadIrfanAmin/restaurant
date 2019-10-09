@extends('admin-layout.content')
@section('sidebar')
@parent
Physicians
@endsection
@section('content')

<!-- Form row -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Edit Physician</h4>
				

				   {{-- {!! Form::model($goodType,['route' => ['goodtypes.update',$goodType->id], 'method' => 'PATCH']) !!} --}}
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Firstname</label>
							<input type="text" class="form-control"  placeholder="Firstname" >
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4" class="col-form-label">Last Name</label>
							<input type="text" class="form-control"  placeholder="Last Name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4" class="col-form-label">Password</label>
							<input type="password" class="form-control"  placeholder="Password">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="col-form-label">Password Confirmation</label>
							<input type="password" class="form-control"  placeholder="Password Confirmation">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4" class="col-form-label">Phone</label>
							<input type="text" class="form-control"  placeholder="Phone">
						</div>
					</div>

					<div class="form-group">
						<label for="inputAddress" class="col-form-label">Specialities</label>
						<input type="text" class="form-control"  placeholder="Phone">
					</div>

					<div class="form-group">
						<label for="inputAddress2" class="col-form-label">Locations</label>
						<select class="selectpicker" multiple data-style="btn-light">
							<option>Mustard</option>
							<option>Ketchup</option>
							<option>Relish</option>
						</select>
					</div>

					<div class="form-row">
						
						<div class="form-group col-md-6">
							<label for="inputState" class="col-form-label">Type of Physician</label>
							<select class="selectpicker" data-style="btn-light">
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="inputState" class="col-form-label">Status</label>
							<select class="selectpicker" data-style="btn-light">
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>

					
					<button type="button" class="btn btn-info waves-effect waves-light">
						Update<span class="btn-label-right"><i class="far fa-save"></i></span>
					</button>

				</form>

			</div> <!-- end card-body -->
		</div> <!-- end card-->
	</div> <!-- end col -->
</div>
<!-- end row -->

@endsection