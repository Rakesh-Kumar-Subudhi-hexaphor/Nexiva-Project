<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Collaborater</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.collaborator.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Name</label>
                        <input type="text" id="multicol-username" name="name" value="{{ old('name') }}"
                            class="form-control" placeholder="Enter name" />
                        @error('name')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Logo (100*100)</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="logo" value="{{ old('logo') }}"
                                class="form-control" />

                        </div>
                        @error('logo')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>








                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>


</x-backend.app-layout>
