<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="container-fluid">
    @include('includes.header')
    <main role="main">
        @yield('content')
    </main>
    <footer class="container-fluid bg-dark text-white text-justify">
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>
</div>


</body>
</html>
