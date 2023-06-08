<x-guest-layout>        
	<!-- Content
	============================================= -->
	<section id="content">
		<div class="content-wrap">
			<div class="container">
				
				<div class="mx-auto mb-0 accordion accordion-lg" style="max-width: 550px;">
					<x-validation-errors class="mb-4" />
					@if (session('status'))
						<div class="mb-4 text-sm font-medium text-green-600">
							{{ session('status') }}
						</div>
					@endif
					<div class="accordion-header">
						<div class="accordion-icon">							
							<i class="accordion-open bi-unlock"></i>
						</div>
						<div class="accordion-title">
							Profile Information
						</div>
					</div>
					<div class="accordion-content">
						<form id="update-profile-form" name="update-profile-form" class="mb-0 row" action="{{ route('login') }}" method="post">
							@csrf
							<div class="col-12 form-group">
								<label for="update-profile-form-name">Name:</label>
								<input type="text" id="update-profile-form-name" name="name" value="{{ old('$user->name') }}" class="form-control">
							</div>

							<div class="col-12 form-group">
								<label for="update-profile-form-email">Email:</label>
								<input type="text" id="update-profile-form-email" name="email" value="{{ old('$user->email') }}" class="form-control">
							</div>
							<div class="col-12 form-group">
								<div class="d-flex justify-content-between">
									<button class="m-0 button button-3d button-black" id="update-profile-form-submit" name="update-profile-form-submit" value="update">Update</button>									
								</div>
							</div>
							
						</form>
					</div>									
				</div>

			</div>
		</div>
	</section><!-- #content end -->   
</x-guest-layout>
