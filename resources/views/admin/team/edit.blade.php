<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Team</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.team.update', $team->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <!-- Image -->
                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <div class="input-group">
                            <input type="file" name="image" class="form-control" />
                        </div>

                        @if ($team->image)
                            <div class="mt-2">
                                <img src="{{ asset($team->image) }}" width="100">
                            </div>
                        @endif

                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Name -->
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="title" value="{{ old('title', $team->title) }}"
                            class="form-control" placeholder="Enter Name" />

                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email', $team->email) }}"
                            class="form-control" placeholder="Enter Email" />

                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Designation -->
                    <div class="col-md-6">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" value="{{ old('designation', $team->designation) }}"
                            class="form-control" placeholder="Enter Designation" />

                        @error('designation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="col-md-12">
                        <label class="form-label">Description</label>
                        <textarea name="short_desc" id="description" class="form-control" cols="30" rows="10">{{ old('short_desc', $team->short_desc) }}</textarea>

                        @error('short_desc')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Update</button>
                    <a href="{{ route('admin.team') }}" class="btn btn-label-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-backend.app-layout>
