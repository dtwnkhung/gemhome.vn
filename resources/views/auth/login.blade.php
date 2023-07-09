<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ __('auth.Login') }} - {{ config('app.name', 'App') }}</title>
	<meta name="description" content="">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('theme/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('theme/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('theme/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<section class="fxt-template-animation fxt-template-layout1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						
						<div class="fxt-form">
							<h2>{{ __('auth.Login') }}</h2>
							<p>{{ __('auth.Log in to continue in our website') }}</p>
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
										<i class="flaticon-envelope"></i>
									</div>

									@error('email')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
										<i class="flaticon-padlock"></i>
									</div>

									@error('password')
										<span class="invalid-feedback d-block" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="form-group row">
									<div class="col-md-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
		
											<label class="form-check-label" for="remember">
												{{ __('auth.Remember Me') }}
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-content-between">
											<button type="submit" class="fxt-btn-fill">{{ __('auth.Login') }}</button>
											@if (Route::has('password.request'))
												<a class="switcher-text2" href="{{ route('password.request') }}">
													{{ __('auth.Forgot Your Password?') }}
												</a>
											@endif
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer d-none">
							<ul class="fxt-socials">
								<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4">
									<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5">
									<a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="fxt-google fxt-transformY-50 fxt-transition-delay-6">
									<a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
								</li>
								<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7">
									<a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
								</li>
								<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
									<a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image="{{ asset('theme/img/figure/bg1-l.jpg') }}"></div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('theme/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ asset('theme/js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('theme/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('theme/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('theme/js/main.js') }}"></script>

</body>

</html>