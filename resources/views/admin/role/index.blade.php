<x-backend.app-layout>

    <div>
        <div class="bg-white p-3 m-3 rounded-md">
            <p class="text-xl font-bold">Employee Create</p>
            <div class="py-3">
                <form action="{{ route('admin.role.store') }}" method="POST" class="grid grid-cols-12 gap-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 md:col-span-6">
                        <label for="">
                            <p class="mb-2">Role Name</p>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mb-3 py-2 px-2 border"
                                placeholder="Name">
                            @error('name')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="col-span-12 my-4">
                        <button type="submit"
                            class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-white m-3 p-3">
            <!-- Role Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-users table border-top">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$role->name}}</td>
                                    <td><a href="{{route('admin.permissions',$role->id)}}" class="btn btn-primary">Permission</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Role Table -->
        </div>
    </div>

</x-backend.app-layout>
