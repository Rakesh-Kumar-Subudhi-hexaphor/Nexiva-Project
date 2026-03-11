<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Solution</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.solution.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <div class="col-md-6" id="title-section">
                        <label class="form-label" for="product-name">Title</label>
                        <input type="text" id="product-name" name="title" class="form-control"
                            placeholder="Enter Title" maxlength="60" />
                        @error('title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="image-section">
                        <label class="form-label" for="multicol-username">Image</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="image" class="form-control" />
                        </div>
                        @error('image')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="image-section">
                        <label class="form-label" for="multicol-username">Icon</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="icon" class="form-control" />
                        </div>
                        @error('icon')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Short Description</label>
                        <input type="text" id="short_desc" name="short_desc" class="form-control"
                            placeholder="Enter Short Description" />
                        @error('short_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            placeholder="Enter Meta Title" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Meta Description</label>
                        <input type="text" id="meta_desc" name="meta_desc" class="form-control"
                            placeholder="Enter Meta Description" />
                        @error('meta_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Key Points</label>

                        <div id="key-points-wrapper">

                            <div class="row mb-2 key-point-row">
                                <div class="col-md-1">
                                    <input type="text" class="form-control serial-number" value="1" readonly>
                                </div>

                                <div class="col-md-9">
                                    <input type="text" name="key_point[]" class="form-control"
                                        placeholder="Enter Key Point">
                                </div>

                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-row">Remove</button>
                                </div>
                            </div>

                        </div>

                        <!-- ADD BUTTON OUTSIDE -->
                        <button type="button" class="btn btn-primary mt-2" id="add-key-point">
                            Add Key Point
                        </button>

                        @error('key_point')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="desc">Description</label>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const wrapper = document.getElementById("key-points-wrapper");
            const addBtn = document.getElementById("add-key-point");

            function updateSerialNumbers() {
                document.querySelectorAll(".serial-number").forEach((el, index) => {
                    el.value = index + 1;
                });
            }

            // ADD ROW
            addBtn.addEventListener("click", function() {

                let newRow = document.createElement("div");
                newRow.classList.add("row", "mb-2", "key-point-row");

                newRow.innerHTML = `
            <div class="col-md-1">
                <input type="text" class="form-control serial-number" readonly>
            </div>

            <div class="col-md-9">
                <input type="text" name="key_point[]" class="form-control"
                    placeholder="Enter Key Point">
            </div>

            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-row">Remove</button>
            </div>
        `;

                wrapper.appendChild(newRow);
                updateSerialNumbers();
            });

            // REMOVE ROW
            wrapper.addEventListener("click", function(e) {

                if (e.target.classList.contains("remove-row")) {

                    let rows = document.querySelectorAll(".key-point-row");

                    if (rows.length > 1) {
                        e.target.closest(".key-point-row").remove();
                        updateSerialNumbers();
                    }

                }

            });

        });
    </script>

</x-backend.app-layout>
