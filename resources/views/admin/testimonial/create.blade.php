<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Tesimonial</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.store.testimonial') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Image</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="image" value=""
                                class="form-control" />

                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Name</label>
                        <input type="text" id="multicol-username" name="name" value="" class="form-control"
                            placeholder="Enter Title" />
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Company</label>
                        <input type="text" id="multicol-username" name="company" value="" class="form-control"
                            placeholder="Enter company" />
                        @error('Company')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Designation</label>
                        <input type="text" id="multicol-username" name="designation" value=""
                            class="form-control" placeholder="Enter Title" />
                        @error('designation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Text Input (Initially shown) -->
                    <div class="col-md-12" id="text-section">
                        <label class="form-label" for="multicol-username">Description</label>
                        <textarea name="message" class="form-control" id="description" cols="30" rows="10"></textarea>
                        @error('message')
                            <p class="text-danger">{{ $message }}</p>
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


    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <script>
        CKEDITOR.plugins.addExternal('youtube', './youtube/');
        CKEDITOR.editorConfig = function(config) {
            config.extraPlugins = 'youtube';
        };
        CKEDITOR.replace('description');
        CKEDITOR.replace('description');
    </script>



</x-backend.app-layout>
