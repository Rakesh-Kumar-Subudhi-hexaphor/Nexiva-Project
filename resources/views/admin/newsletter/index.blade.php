<x-backend.app-layout>
    <div class="bg-white m-3 p-3">
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newses as $news)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $news->email }}</td>
                                <td>
                                    <a href="{{ route('admin.newsletter.delete', $news->id) }}" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend.app-layout>
