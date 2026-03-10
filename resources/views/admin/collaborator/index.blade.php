<x-backend.app-layout>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.collaborator.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collaborator as $asso)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ asset($asso->logo) }}" target="_blank" rel="noopener noreferrer"><img
                                            src="{{ asset($asso->logo) }}" class="w-px-40 h-auto" alt="asso_image"></a>
                                </td>
                                <td>{{ $asso->name }}</td>
                                <td>
                                    <a href="{{ route('admin.collaborator.delete', $asso->id) }}"
                                        class="btn btn-danger">
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
