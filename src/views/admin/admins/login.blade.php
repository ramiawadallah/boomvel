@extends('layouts.app') 
@section('content')

@section('paneltitle') {{ config('app.name', 'Boomvel') }} {{ ucfirst(config('multiauth.prefix')) }} Login to your account @endsection

<form class="js-validation-login form-horizontal"  method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
    @csrf
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material form-material-primary floating">
                <label for="email">Email</label>
                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" required name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> 
                @endif
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material form-material-primary floating">
                <label for="login-password">Password</label>
                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required id="login-password" name="password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> 
                @endif
            </div>
        </div>
    </div>



    <label class="check">
        {{ __('Remember Me') }}
        <input type="checkbox" id="login-remember-me"  name="remember" {{ old( 'remember') ? 'checked' : '' }}><span class="checkmark"></span> 
    </label>

    <div class="row">
        <div class="form-group col-xs-6 col-sm-12 col-md-4">
            <button class="btn btn-primary btn-md" type="submit"><i class="si si-login pull-right"></i> {{ __('Login') }}</button>
        </div>
        <div class="col-xs-6 col-sm-12 col-md-8">
            <span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('admin.password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
        </div>
    </div>

</form>

@endsection