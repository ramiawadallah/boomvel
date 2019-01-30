@extends('layouts.app') 
@section('content')

    @section('paneltitle')Reset {{ ucfirst(config('multiauth.prefix')) }} Password @endsection

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Admin Password') }}">
        @csrf

        <div class="form-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}"
                required> @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span> @endif
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Send Password Reset Link') }}</button>

    </form>
       
@endsection