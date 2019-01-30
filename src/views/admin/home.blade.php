@extends('layouts.backend') 
@section('content')
<!-- OVERVIEW -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</h3>
        @if (session('status'))
        <p class="panel-subtitle">{{ session('status') }}</p>
        @endif You are logged in to {{ config('multiauth.prefix') }} side!
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-users"></i></span>
                    <p>
                        <span class="number">{{ \App\Admin::count() }}</span>
                        <span class="title">Admins</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                    <p>
                        <span class="number">203</span>
                        <span class="title">Sales</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-eye"></i></span>
                    <p>
                        <span class="number">274,678</span>
                        <span class="title">Visits</span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="fa fa-eye"></i></span>
                    <p>
                        <span class="number">274,678</span>
                        <span class="title">Visits</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OVERVIEW -->
@endsection