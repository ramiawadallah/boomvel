@extends('layouts.app') 
@section('content')

@section('paneltitle') {{ config('app.name', 'Boomvel') }} {{ ucfirst(config('multiauth.prefix')) }} Login to your account @endsection

<form class="form-auth-small"  method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
    @csrf
    <div class="form-group">
        <label for="signin-email" class="control-label sr-only">Email</label>

        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus> 
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span> 
            @endif
    </div>

    <div class="form-group">
        <label for="signin-password" class="control-label sr-only">Password</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required> 
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span> 
        @endif
    </div>

    <div class="form-group clearfix">
        <label class="fancy-checkbox element-left">
            <input type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
            <span>{{ __('Remember Me') }}</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
    <div class="bottom">
        <span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('admin.password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
    </div>
</form>


@endsection