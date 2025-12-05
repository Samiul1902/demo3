<x-layout title="Register - Smart Salon">
    <div class="auth-card">
        <h2 class="auth-title">Create Account</h2>
        
        <form action="/register" method="POST">
            @csrf <!-- Security Token -->
            
            <!-- Name -->
            <div class="form-group">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>

            <div class="text-center mt-4">
                <p>Already have an account? <a href="/login" style="color: var(--primary); font-weight: bold;">Login</a></p>
            </div>
        </form>
    </div>
</x-layout>