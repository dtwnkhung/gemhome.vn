
<div class="login-ui-wrapper">
    <div class="login-panel">
        <h5 class="text-center mb-4">{{ __('auth.Login') }}</h5>
        <div class="tab-pane active" id="login" role="tabpanel">
            <form method="POST" action="{{ route('appuser.login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input
                    id="email"
                    type="email"
                    class="form-control
                    @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    placeholder="{{ __('Email') }}"
                    autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <a class="resend-email hidden d-none" href="/resend-email" title="Resend activation email">Resend activation email</a>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="input-wrapper">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            required
                            placeholder="{{ __('Password') }}"
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-button">
                    <button class="btn btn-default btn-block btn-blue btn-signup" type="submit">{{ __('auth.Login') }}</button>
                </div>
                <div class="row registered-forgot" role="tablist">
                    <div class="col-md-6 text-left">
                        @if (Route::has('appuser.register')) 
                            <a class="btn btn-link" href="{{ route('appuser.register') }}">
                                {{ __('auth.Register') }}?
                            </a> 
                        @endif
                    </div>
                    @if (Route::has('password.request'))
                        <div class="col-md-6 text-right">
                            <a class="btn btn-link" href="{{ route('appuser.password.request') }}">
                                {{ __('auth.Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </div>
                <div class="social-wrapper" role="tablist">
                    {{-- <div class="w-100 text-center social_facebook">
                        @include('appuser.components.button_facebook_login')
                    </div>  --}}
                    <div class="w-100 text-center social_google">
                        @include('appuser.components.button_google_login')
                    </div> 
                </div>
                <div class="col-md-12 terms-of-use">This site is protected by reCAPTCHA and <a href="/terms" target="_blank">Terms of Use</a> apply.</div>
            </form>
        </div>
    </div> <!-- login-card -->
</div> <!-- login-ui-wrapper -->

<link rel="stylesheet" href="/css/auth.css">
