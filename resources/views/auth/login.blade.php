<x-layout title="Login - Smart Salon">
    <div class="auth-card">
        <h2 class="auth-title">Welcome Back</h2>
        
        <form action="/login" method="POST">
            @csrf
            
            <!-- Email -->
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%">Login</button>

            <div class="text-center mt-4">
                <p>New here? <a href="/register" style="color: var(--primary); font-weight: bold;">Create Account</a></p>
            </div>
        </form>
    </div>
</x-layout>
