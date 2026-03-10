<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Policy</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.policy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <div class="col-md-6" id="category-section">
                        <label class="form-label" for="type">Select Type</label>
                        <select name="type" class="form-select" id="type">
                            <option value="">Select Type</option>
                            <option value="terms_condition">Terms & Condition</option>
                            <option value="terms_sale">Terms & Sales</option>
                        </select>
                        @error('type')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            placeholder="Enter Meta Title" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Meta Description Section -->
                    <div class="col-md-6" id="meta-desc-section">
                        <label class="form-label" for="meta_desc">Meta Description</label>
                        <textarea name="meta_desc" class="form-control" cols="30" rows="5" maxlength="160"></textarea>
                        @error('meta_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
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
