<x-backend.app-layout>

    <div>
        <div class="bg-white p-3 m-3 rounded-md">
            <p class="text-xl font-bold">Permissions</p>
            <div class="py-3">
                <form action="{{route('admin.permissions.update',$role->id) }}" method="POST" class="grid grid-cols-12 gap-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 ">
                        @forelse ($permissions as $permission)
                        <label class="flex gap-2">
                            <input type="checkbox" name="{{ $permission->name }}" value="{{ $permission->id }}" {{ $data->contains($permission->id) ? 'checked' : '' }}>
                            {{ $permission->name }}
                        </label>
                        @empty
                        <p>No Permissions Found</p>
                        @endforelse
                    </div>
                    <div class="col-span-12 my-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </x-backend.app-layout>

