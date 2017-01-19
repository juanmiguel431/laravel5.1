	@if( !$errors->isEmpty() )

		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<p><strong>Oops!</strong> Please fix the following errors:</p>
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
		</div>

{{-- 	<div class="alert alert-danger alert-dismissible">
		<p><strong>Oops!</strong> Please fix the following errors:</p>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div> --}}
	@endif