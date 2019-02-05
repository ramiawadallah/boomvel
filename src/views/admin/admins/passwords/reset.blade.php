@extends('layouts.app') 
@section('content')
                

 @section('paneltitle') {{ ucfirst(config('multiauth.prefix')) }} Reset Password @endsection

<form class="js-validation-login form-horizontal push-30-t push-50" method="POST" action="{{ route('admin.password.request') }}" aria-label="{{ __('Admin Reset Password') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material form-material-primary floating">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}"
                    required autofocus> 
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
                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> 
                @endif
            </div>
        </div>
    </div>
    

    <div class="form-group">
        <div class="col-xs-12">
            <div class="form-material form-material-primary floating">
                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-12 col-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset') }}
                </button>
        </div>
        <div class="col-sm-12 col-md-8">
            <span class="helper-text"><i class="fa fa-arrow-left" aria-hidden="true"></i> <a href="{{ url('/admin') }}">{{ __('Back to login?') }}</a></span>
        </div>
    </div>
</form>
                
@endsection