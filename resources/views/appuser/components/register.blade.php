
<div class="login-ui-wrapper">
    <div class="login-panel">
        <h5 class="text-center mb-4">{{ __('auth.Register') }}</h5>
        <div class="tab-pane active" id="login" role="tabpanel">
            <form method="POST" action="{{ route('appuser.register') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-label col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-input">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="email" class="col-label col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-input">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                

                <div class="form-group mb-4">
                    <label for="password" class="col-label col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-input">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="password-confirm" class="col-label col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-input">
                        <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Password confirmation') }}" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                
                <div class="form-button">
                    <button class="btn btn-default btn-block btn-blue btn-signup" type="submit">{{ __('auth.Register') }}</button>
                </div>
                <div class="row registered-forgot" role="tablist">
                    <div class="col-md-6 text-left"></div>
                    @if (Route::has('appuser.loginform'))
                        <div class="col-md-6 text-right">
                                <a class="btn btn-link" href="{{ route('appuser.loginform') }}">
                                    {{ __('auth.Login') }}?
                                </a>
                        </div>
                    @endif
                </div>

                <div class="w-100 text-center social_google">
                    @include('appuser.components.button_google_login')
                </div> 
                <div class="col-md-12 terms-of-use">This site is protected by reCAPTCHA and <a href="/terms" target="_blank">Terms of Use</a> apply.</div>
            </form>
        </div>
    </div> <!-- login-card -->
</div> <!-- login-ui-wrapper -->

<link rel="stylesheet" href="/css/auth.css">
