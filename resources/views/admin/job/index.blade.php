<x-backend.app-layout>
    <style>
        .tag {
            display: inline-block;
            padding: 2px 5px;
            margin: 5px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            font-size: 10px;
        }
    </style>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.job.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>

                            <th>Title</th>


                            <th>Experience</th>


                            <th>Location</th>
                            {{-- <th>Description</th> --}}
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->experience }}</td>
                                <td>{{ $job->location }}</td>
                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.job.edit', $job->id) }}" class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.job.delete', $job->id) }}" class="btn btn-danger mr-2">
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
        <!--/ Role Table -->
    </div>
</x-backend.app-layout>
