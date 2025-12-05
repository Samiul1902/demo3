<x-admin-layout>
    <div class="auth-card" style="max-width: 600px; margin: 0 auto;">
        <h2 class="auth-title">Add New Service</h2>

        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Service Name</label>
                <input type="text" name="name" class="form-control" placeholder="e.g., Haircut" required>
            </div>

            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <!-- Optional Image Upload -->
            <div class="form-group">
                <label class="form-label">Service Image (Optional)</label>
                <input type="file" name="image" class="form-control">
                <small style="color: var(--primary);">* Leave empty to auto-generate using AI (Nano Banana)</small>
            </div>

            <div style="display: flex; gap: 20px;">
                <div class="form-group" style="flex: 1;">
                    <label class="form-label">Price (BDT)</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="form-group" style="flex: 1;">
                    <label class="form-label">Duration (Minutes)</label>
                    <input type="number" name="duration" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%">Save Service</button>
        </form>
    </div>
</x-admin-layout>