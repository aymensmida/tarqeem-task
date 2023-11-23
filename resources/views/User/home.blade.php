@extends('Guest.layouts.app')
@section('title', 'Home')
@section('page-content')

    @php
        $example_actions = ['View Profile', 'Edit Settings', 'Upload Photos', 'Post Updates', 'Connect with Friends', 'Explore Content'];
    @endphp

    <div class="row">
        @foreach ($example_actions as $action)
            <div class="col-md-4">
                <div class="card mt-1">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $action }}</h5>
                        <p class="card-text">Perform various tasks and actions related to your account. Explore the features
                            and make the most out of your experience.</p>
                        <a href="#" class="btn btn-success">Go {{ $action }}</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
