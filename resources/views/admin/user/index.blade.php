<x-backend.app-layout>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            {{-- <th>Role</th> --}}

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $user->getRoleNames()->first() }}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td><a href="{{route('admin.user.edit', ['admin' =>$user->id ])}}" class="btn btn-primary">Edit</a></td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Role Table -->
    </div>
</x-backend.app-layout>
