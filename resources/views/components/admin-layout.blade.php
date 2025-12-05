<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('partials.styles')
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h3>⚙️ Admin Panel</h3>
            <nav>
                <a href="#" class="active">Dashboard</a>
                <a href="{{ route('admin.services.index') }}">Services</a>
                <a href="#">Staff</a>
                <a href="#">Bookings</a>
                <form action="{{ route('logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="btn btn-outline" style="width:100%; border-color:#adb5bd; color:#adb5bd;">Logout</button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="admin-content">
            @if(session('success'))
                <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif
            {{ $slot }}
        </main>
    </div>
    @include('partials.scripts')
</body>
</html>
