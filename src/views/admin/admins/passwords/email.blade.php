@extends('layouts.app') 
@section('content')

    @section('paneltitle')Reset {{ ucfirst(config('multiauth.prefix')) }} Password @endsection

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form class="js-validation-login form-horizontal push-30-t push-50" method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Admin Password') }}">
        @csrf

        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material form-material-primary floating">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> 
                    @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> 
                    @endif                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-6 col-sm-12 col-md-4">
                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <span class="helper-text"><i class="fa fa-arrow-left" aria-hidden="true"></i> <a href="{{ url('/admin') }}">{{ __('Back to login?') }}</a></span>
            </div>
        </div>
    </form>
       
@endsection