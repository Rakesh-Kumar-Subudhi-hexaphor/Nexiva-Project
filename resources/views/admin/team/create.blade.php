<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Team</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.team.store') }}" method="POST"
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
                        <input type="text" id="multicol-username" name="title" value="" class="form-control"
                            placeholder="Enter Title" />
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">Email</label>
                        <input type="email" id="multicol-username" name="email" value="" class="form-control"
                            placeholder="Enter Email" />
                        @error('email')
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
                        <textarea name="short_desc" class="form-control" cols="30" rows="10"></textarea>
                        @error('short_desc')
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
