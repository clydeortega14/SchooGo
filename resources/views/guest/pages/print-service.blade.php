@extends('landing-page.layouts.landing-page-layout')

@section('title', 'Print Service')

@section('content')

<div class="container padding">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					Information
				</div>

				<div class="card-body">
					<div class="form-group">
						<label class="control-label">Your files here </label>
						<br>
						<input type="file" name="files[]" multiple="true">
					</div>

					<div class="form-group">
						<label class="control-label">file type</label>
						<br>
						<small><p><u>Must be a pdf file</u> </p></small>
						<input type="radio" name="file_type" value="document file"> DOCUMENT file <br>
						<input type="radio" name="file_type" value="pdf file" checked> PDF file<br>
					</div>

					<div class="form-group">
						<label>Print Size</label> <br> 
						<input type="radio" name="print_size" value="short" checked> Short <br>
						<input type="radio" name="print_size" value="long"> Long <br>
					</div>

					<div class="form-group">
						<label>Print Size</label> <br> 
						<input type="radio" name="print_type" value="black and white"> Black and White<br>
						<input type="radio" name="print_type" value="colored" checked> Colored <br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection