<nav class="main-nav">
    <div class="container nav-container">
        <a class="nav-brand" href="/">✂️ Smart Salon</a>

        <!-- Mobile Menu Button (Simple) -->
        <ul class="nav-menu">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="#">Services</a></li>

            @auth
                <li><a class="nav-link" href="#">My Bookings</a></li>
                <li style="display: flex; align-items: center; gap: 10px;">
                    <span style="font-weight:bold; color:var(--primary)">{{ Auth::user()->name }}</span>
                    
                    <!-- Logout Form (Must be a POST request for security) -->
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline" style="padding: 5px 15px; font-size: 0.8rem;">Logout</button>
                    </form>
                </li>
            @else
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="btn btn-primary" href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>


