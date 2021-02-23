@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="{{ route('add_district') }}" class="btn btn-sm btn-primary float-right">New +</a><div class="clearfix"></div></div>

                <div class="card-body">
                    @include('flash')

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
