@extends('Guest.layouts.app')
@section('title','Login')
@section('page-content')
<div class="row">

    <div class="col-md-6 mx-auto bg-white shadow p-5">
        <div class="row mb-5">
            <div class="col-6 mx-auto">

                <div class="logo">
                    <img src="https://via.placeholder.com/100" alt="Logo">
                </div>

            </div>
        </div>
        <div class="row">

            <form method="POST" action="{{ route('login') }}" id="form-login">
                @csrf
                <div class="row">

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email address">

                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror


                           </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">

                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary" id="btn-login" onclick="submitAndAction('form-login','btn-login')">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span> Login</button>
            </form>
            <div class="mt-3">
                <p>Don't have an account? <a href="{{ route('register') }}">Sign up here</a></p>
            </div>
        </div>
    </div>

</div>


@endsection
