@extends('admin.layouts.master')
@section('title', 'Themes - Admin')
@section('maincontent')
 

@component('components.breadcumb',['thirdactive' => 'active'])
@slot('heading')
   {{ __('adminstaticword.Themes') }}
@endslot
@slot('menu1')
   {{ __('adminstaticword.Themes') }}
@endslot



@endcomponent

<div class="contentbar">
	@if ($errors->any())  
	<div class="alert alert-danger" role="alert">
	@foreach($errors->all() as $error)     
	<p>{{ $error}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true" style="color:red;">&times;</span></button></p>
		@endforeach  
	</div>
	@endif

	@php
	    $key = \DB::table('api_keys')
        	  ->where('id', '2')
        	  ->first()
	@endphp

	@if(Module::has('Blizzard') && Module::find('Blizzard')->isEnabled())
	  @if(config('blizzard.MIX_THEME_FOLDER') == '' || !$key)
		<div class="alert alert-danger">
			<p class="alert-text">
				{{__("Please configure blizzard theme before using it.")}}
			</p>
		</div>
	  @endif
	@endif
							
                          
	<div class="row">
	  <div class="col-lg-12">
		<div class="card m-b-30">
		  <div class="card-header">
			<h5 class="card-title">{{ __('Theme Settings') }}</h5>
		  </div>
		  <div class="card-body">
			<form action="{{ action('ThemeController@update') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				
				<div class="row">

					<div class="shadow-sm border card col-md-6" style="width: 18rem;">
						<img src="{{ url('images/theme/1.png') }}" class="card-img-top" alt="Classic">
						<div class="card-body">
						    <h5 class="card-title">Classic</h5>
						    <p class="card-text">eClass Classic Theme.</p>
						    <div class="custom-radio-button mt-3">
						    	<div class="form-check-inline radio-primary">
			                      	<section class="mt-2">
										<input type="radio" id="classicTheme" name="default_theme" value="classic" required {{ $env_files['DEFAULT_THEME'] == 'classic' ? 'checked' : '' }}>
			                      		<label for="classicTheme" class="mr-3">
			                      			&nbsp;&nbsp;&nbsp;{{ __("Select Theme") }}
			                      		</label>
									</section>
			                    </div>
			                </div>
						</div>
					</div>
					@if(Module::has('Blizzard') && Module::find('Blizzard')->isEnabled())
					<!-- Blizzard Configuration -->
					<div class="shadow-sm border card col-md-6" style="width: 18rem;">
						<img src="{{ url('images/theme/2.png') }}" class="card-img-top" alt="Classic">
						<div class="card-body">
						    <h5 class="card-title">Blizzard</h5>
						    <p class="card-text">eClass Blizzard Vue SPA Theme.</p>
						    <div class="custom-radio-button mt-3">
						    	<div class="form-check-inline radio-danger">

			                      <section class="mt-2">
									<input type="radio" id="skillifyTheme" name="default_theme" value="blizzard" required {{ $env_files['DEFAULT_THEME'] == 'blizzard' ? 'checked' : '' }}>
									<label for="skillifyTheme" class="mr-3">
										&nbsp;&nbsp;&nbsp;{{ __("Select Theme") }}
									</label>
								  </section>

								  <a href="{{ route('configuration.show')}}" class="btn btn-md btn-danger-rgba">
									<i class="feather icon-settings"></i> {{__("Configure")}}
								  </a>
			                    </div>

			                </div>
						</div>
					</div>
					@endif

					<!-- Apply theme button -->
					<div class="mt-3 col-md-12">
						<div class="form-group">
							<button type="submit" class="btn btn-primary-rgba">
								<i class="fa fa-check-circle"></i>
								{{ __("Apply Theme")}}
							</button>
						</div>
					</div>
	            
            	</div>
		
			
		</form>
	  </div>
	</div>
  </div>
</div>
</div>
@endsection
	


