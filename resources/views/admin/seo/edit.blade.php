<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>SEO Edit</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.seo.update', $seo->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6" id="category-section">
                        <label class="form-label" for="page_id">Select Page</label>
                        <select name="page_id" class="form-select">
                            <option value="">Select Page</option>
                            <option value="1" {{ isset($seo) && $seo->page_id == 1 ? 'selected' : '' }}>Home Page
                            </option>
                            <option value="2" {{ isset($seo) && $seo->page_id == 2 ? 'selected' : '' }}>About Page
                            </option>
                            <option value="3" {{ isset($seo) && $seo->page_id == 3 ? 'selected' : '' }}>Blog Page
                            </option>
                            <option value="4" {{ isset($seo) && $seo->page_id == 4 ? 'selected' : '' }}>Service
                                Page</option>
                            <option value="5" {{ isset($seo) && $seo->page_id == 5 ? 'selected' : '' }}>Contact
                                Page</option>
                            <option value="6" {{ isset($seo) && $seo->page_id == 6 ? 'selected' : '' }}>Career Page
                            </option>
                            <option value="7" {{ isset($seo) && $seo->page_id == 7 ? 'selected' : '' }}>Achievement
                                Page</option>
                            <option value="8" {{ isset($seo) && $seo->page_id == 8 ? 'selected' : '' }}>Event Page
                            </option>
                            <option value="9" {{ isset($seo) && $seo->page_id == 9 ? 'selected' : '' }}>Recent Work
                                Page</option>
                            <option value="10" {{ isset($seo) && $seo->page_id == 10 ? 'selected' : '' }}>Terms &
                                Condition Page</option>
                            <option value="11" {{ isset($seo) && $seo->page_id == 11 ? 'selected' : '' }}>Terms &
                                Sales Page</option>

                        </select>
                    </div>
                    <!-- Meta Title Section -->
                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            value="{{ old('meta_title', $seo->meta_title) }}" placeholder="Enter Meta Title" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Meta Description Section -->
                    <div class="col-md-6" id="meta-desc-section">
                        <label class="form-label" for="meta_desc">Meta Description</label>
                        <textarea name="meta_desc" class="form-control" cols="30" rows="5">{{ old('meta_desc', $seo->meta_desc) }}</textarea>
                        @error('meta_desc')
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
