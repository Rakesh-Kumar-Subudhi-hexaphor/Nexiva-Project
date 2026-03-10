<x-backend.app-layout>

    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.policy.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Policy</th>
                            <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($policies as $policy)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($policy->type == 'term_condition')
                                        Terms & Condition
                                    @else
                                        Term of Sales
                                    @endif
                                </td>
                                <td>{{ $policy->meta_title }}</td>
                                <td>{{ $policy->meta_desc }}</td>
                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.policy.edit', $policy->id) }}" class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.policy.delete', $policy->id) }}"
                                            class="btn btn-danger mr-2">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend.app-layout>
