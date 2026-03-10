<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Slider</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Title</label>
                        <input type="text" id="multicol-username" name="title" value="{{ old('title') }}"
                            class="form-control" placeholder="Enter Title" />
                        @error('title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Short Description</label>
                        <input type="text" id="multicol-username" name="short_desc" value="{{ old('short_desc') }}"
                            class="form-control" placeholder="Enter Short Description" />
                        @error('short_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Image</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="image" value="{{ old('image') }}"
                                class="form-control" />

                        </div>
                        @error('image')
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
