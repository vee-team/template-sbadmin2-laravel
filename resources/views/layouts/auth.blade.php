<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.panel.header')
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.panel.footer')
</body>
</html>