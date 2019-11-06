{{-- success --}}
@if(session()->has('success'))
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		<h4>
			<i class="icon fa fa-info"></i>
			<span>Alert!</span>
		</h4>
		{{ session('success') }}
	</div>
@endif
<!-- update -->
@if(session()->has('updated'))
	<div class="alert alert-info alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		<h4>
			<i class="icon fa fa-info"></i>
			<span>Alert!</span>
		</h4>
		{{ session('updated') }}
	</div>
@endif

<!-- deleted -->
@if(session()->has('deleted'))
	<div class="alert alert-warning alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		<h4>
			<i class="icon fa fa-info"></i>
			<span>Alert!</span>
		</h4>
		{{ session('deleted') }}
	</div>
@endif

<!-- server error -->
@if(session()->has('error'))
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		<h4>
			<i class="icon fa fa-info"></i>
			<span>Alert!</span>
		</h4>
		{{ session('error') }}
	</div>
@endif