<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add SEO</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.seo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <div class="col-md-6" id="category-section">
                        <label class="form-label" for="page_id">Select Page</label>
                        <select name="page_id" class="form-select" id="page_id">
                            <option value="">Select Page</option>
                            <option value="1">Home Page</option>
                            <option value="2">About Page</option>
                            <option value="3">Blog Page</option>
                            <option value="4">Service Page</option>
                            <option value="5">Contact Page</option>
                            <option value="6">Career Page</option>
                            <option value="7">Achivement Page</option>
                            <option value="8">Event Page</option>
                            <option value="9">Resent Work Page</option>
                        </select>
                        @error('page_id')
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
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</x-backend.app-layout>
