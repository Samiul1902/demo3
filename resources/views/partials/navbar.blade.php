<nav class="main-nav">
    <div class="container nav-container">
        <a class="nav-brand" href="/">✂️ Smart Salon</a>

        <!-- Mobile Menu Button (Simple) -->
        <ul class="nav-menu">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="#">Services</a></li>

            @auth
                <li><a class="nav-link" href="#">My Bookings</a></li>
                <li><span style="font-weight:bold; color:var(--primary)">{{ Auth::user()->name }}</span></li>
            @else
                <!-- We use /login instead of route('login') to prevent errors before routes exist -->
                <li><a class="nav-link" href="/login">Login</a></li>
                <li><a class="btn btn-primary" href="/register">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>


