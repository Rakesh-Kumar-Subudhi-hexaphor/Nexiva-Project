<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Certification Edit</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.certiification.update', $certification->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Title</label>
                        <input type="text" id="multicol-username" name="name"
                            value="{{ old('name', $certification->name) }}" class="form-control"
                            placeholder="Enter Title" />
                        @error('name')
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

                        @if ($certification->image)
                            <img src="{{ asset($certification->image) }}" alt="Current Image" class="mt-3"
                                style="max-width: 100px;">
                        @endif
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
