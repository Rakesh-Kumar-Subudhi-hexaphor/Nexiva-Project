<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Breadcrumb Image</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.breadcrumb.update', $breadcrumb->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6" id="category-section">
                        <label class="form-label" for="page_id">Select Page</label>
                        <select name="page_id" class="form-select">
                            <option value="">Select Page</option>
                            <option value="2"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 2 ? 'selected' : '' }}>About Page
                            </option>
                            <option value="3"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 3 ? 'selected' : '' }}>Blog Page
                            </option>
                            <option value="4"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 4 ? 'selected' : '' }}>Service
                                Page</option>
                            <option value="5"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 5 ? 'selected' : '' }}>Contact
                                Page</option>
                            <option value="6"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 6 ? 'selected' : '' }}>Career Page
                            </option>
                            <option value="7"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 7 ? 'selected' : '' }}>Casestudy
                                Page</option>
                            <option value="8"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 8 ? 'selected' : '' }}>FAQ Page
                            </option>
                            <option value="9"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 9 ? 'selected' : '' }}>Industry Serve
                                Page</option>
                            <option value="10"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 10 ? 'selected' : '' }}>Solution Page
                            </option>
                            <option value="11"
                                {{ isset($breadcrumb) && $breadcrumb->page_id == 11 ? 'selected' : '' }}>Team Page
                            </option>

                        </select>
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
                        @if ($breadcrumb->image)
                            <img src="{{ asset($breadcrumb->image) }}" alt="Current Image" class="mt-3"
                                style="max-width: 100px;">
                        @endif
                    </div>
                    <div class="col-md-12" id="sub-section">
                        <label class="form-label" for="multicol-username">Sub Heading</label>
                        <div class="input-group">
                            <input type="text" id="multicol-username" name="subHeading" class="form-control"
                                value="{{ $breadcrumb->subHeading }}" />
                        </div>
                        @error('subHeading')
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
