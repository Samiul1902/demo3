<x-admin-layout>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Manage Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Add New Service</a>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price (BDT)</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>
                    <!-- Display the AI generated image -->
                    <img src="{{ $service->image_url }}" width="80" height="50" style="object-fit: cover; border-radius: 5px;">
                </td>
                <td><strong>{{ $service->name }}</strong></td>
                <td>৳{{ $service->price }}</td>
                <td>{{ $service->duration_minutes }} mins</td>
                <td>
                    <button class="btn btn-outline" style="padding: 5px 10px; font-size: 0.8rem;">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>