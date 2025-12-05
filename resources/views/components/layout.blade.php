<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Smart Salon' }}</title>
    
    <!-- Include Custom Styles -->
    @include('partials.styles')
</head>
<body>

    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Include Scripts -->
    @include('partials.scripts')
</body>
</html>