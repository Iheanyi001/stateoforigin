<div>
    <div class="mb-4">
        <input type="text" wire:model="search" placeholder="Search..." class="form-control" />
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Application Type</th>
                <th>Name</th>
                <th>LGA</th>
                <th>Payment Status</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
                <tr>
                    <td>{{ $request->application_type }}</td>
                    <td>{{ $request->first_name }} {{ $request->middle_name }} {{ $request->last_name }}</td>
                    <td>{{ $request->lga }}</td>
                    <td>{{ $request->payment_status }}</td>
                    <td>{{ $request->status }}</td>
                    <td>{{ $request->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('application.request.view', $request->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $requests->links() }} <!-- Pagination links -->
    </div>
</div>
