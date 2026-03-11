<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Service</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.service.update', $service->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <!-- Category (Only shown for Blog) -->



                    <!-- Title (Only shown for Blog and Video Blog) -->
                    <div class="col-md-6" id="title-section">
                        <label class="form-label" for="product-name">Title</label>
                        <input type="text" id="product-name" name="title" class="form-control"
                            value="{{ old('title', $service->title) }}" placeholder="Enter Title" />
                        @error('title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image (Only shown for Blog and Video Blog) -->
                    <div class="col-md-6" id="image-section">
                        <label class="form-label" for="multicol-username">Image</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="image" class="form-control" />
                        </div>

                        @error('image')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                        @if ($service->image)
                            <img src="{{ asset($service->image) }}" alt="Current Image" class="mt-3"
                                style="max-width: 100px;">
                        @endif
                    </div>

                    <div class="col-md-6" id="image-section">
                        <label class="form-label" for="multicol-username">Icon</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="icon" class="form-control" />
                        </div>

                        @error('icon')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                        @if ($service->icon)
                            <img src="{{ asset($service->icon) }}" alt="Current Icon" class="mt-3"
                                style="max-width: 100px;">
                        @endif
                    </div>

                    <div class="col-md-6" id="source-section">
                        <label class="form-label" for="product-name">Short Description</label>
                        <input type="text" id="product-name" name="short_desc" value="{{ $service->short_desc }}"
                            class="form-control" placeholder="Enter short description" />
                        @error('short_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            placeholder="Enter Meta Title" value="{{ $service->meta_title }}" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Meta Description</label>
                        <input type="text" id="meta_desc" name="meta_desc" class="form-control"
                            placeholder="Enter Meta Description" value="{{ $service->meta_desc }}" />
                        @error('meta_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Section -->
                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description', $service->description) }}</textarea>
                        @error('description')
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


    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.plugins.addExternal('youtube', './youtube/');
        CKEDITOR.editorConfig = function(config) {
            config.extraPlugins = 'youtube';
        };
        CKEDITOR.replace('description');
        CKEDITOR.replace('description');
    </script>




</x-backend.app-layout>
