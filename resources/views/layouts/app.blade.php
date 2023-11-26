<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layouts.navbar')

    <div class="container flex-grow-1">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
