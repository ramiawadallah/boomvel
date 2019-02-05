@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <a class="block block-rounded block-link-pop border-left border-primary border-4x"">
            <div class="block-content block-content-full">
                <div class="font-size-sm font-w600 text-uppercase text-muted">Admins</div>
                <div class="font-size-h2 font-w400 text-dark">{{ \App\Admin::count() }}</div>
            </div>
        </a>
    </div>

    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <a class="block block-rounded block-link-pop border-left border-primary border-4x"">
            <div class="block-content block-content-full">
                <div class="font-size-sm font-w600 text-uppercase text-muted">Users</div>
                <div class="font-size-h2 font-w400 text-dark">{{ \App\User::count() }}</div>
            </div>
        </a>
    </div>
</div>
@endsection