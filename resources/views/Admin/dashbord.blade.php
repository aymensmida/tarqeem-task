<!DOCTYPE html>
<html>
<head>
    <title>Admin Space</title>

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    {{-- Bootstarp 5 CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" integrity="sha512-ykRBEJhyZ+B/BIJcBuOyUoIxh0OfdICfHPnPfBy7eIiyJv536ojTCsgX8aqrLQ9VJZHGz4tvYyzOM0lkgmQZGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <livewire:styles />
</head>
<body>
    <div class="container">
        <div class="row justify-content-between mb-3">
            <div class="col">
                @auth('admin')
                <h6>Admin:{{ Auth::guard('admin')->user()->name }}</h6>
                @endauth

            </div>
            <div class="col text-end">
                <a class="nav-link" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
            </div>


        </div>
    <livewire:user-list />
    </div>
    <livewire:scripts />
    <script src="{{ asset('assets/main.js') }}"></script>
    {{-- Bootstarp 5 Javascript CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</html>
