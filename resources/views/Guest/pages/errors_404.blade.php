@extends('Guest.layouts.app')
@section('title', 'Register')
@section('page-content')

    <div class="row">

        <div class="col-md-8 mx-auto">
            <div class="text-center">
                <h1 class="display-1 text-danger">404</h1>
                <p ><i class="fa fa-server" aria-hidden="true"></i> Not Found</p>
                <p class="text-muted"> <i class="fa fa-server" aria-hidden="true"></i> The requested URL <strong>{{ $url }}</strong> was not found on this server.</p>
                <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
            </div>
        </div>

    </div>

@endsection
