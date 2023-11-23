<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Application Name @yield('title')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>


    <div class="container" style="min-height: 90vh">

        <div id="loading-spinner" class="loader mt-5"></div>
        <div id="content-container" style="opacity: 0;">
            <div class="row">

                <div class="col-md-6 mx-auto bg-white shadow p-5 border border-primary rounded">
                    <h3 class="text-center mb-3">Admin Space</h3>
                    <div class="row mb-5">
                        <div class="col-6 mx-auto">

                            <div class="logo">
                                <img src="https://via.placeholder.com/100" alt="Logo">
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <form method="POST"  action="{{ route('admin.login.submit') }}" id="form-login">
                            @csrf
                            <div class="row ">

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


                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary" id="btn-login" onclick="submitAndAction('form-login','btn-login')">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span> Login</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    @include('Guest.partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>



