<x-backend.app-layout>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.team.create') }}" class="btn btn-primary mb-2">+ Create</a>

        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive testimony-box">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr class="table-header">
                            <th>S/N</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Short Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($team->image) }}" class="w-px-40 h-auto " alt="team_image">
                                </td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->email }}</td>
                                <td>{{ $team->designation }}</td>
                                <td>{!! $team->short_desc !!}</td>
                                <td>
                                    <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-info mr-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('admin.team.delete', $team->id) }}" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Role Table -->
    </div>

</x-backend.app-layout>
