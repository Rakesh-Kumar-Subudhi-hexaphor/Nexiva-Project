<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Solution</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.solution.update', $solution->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <!-- Category (Only shown for Blog) -->



                    <!-- Title (Only shown for Blog and Video Blog) -->
                    <div class="col-md-6" id="title-section">
                        <label class="form-label" for="product-name">Title</label>
                        <input type="text" id="product-name" name="title" class="form-control"
                            value="{{ old('title', $solution->title) }}" placeholder="Enter Title" />
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
                        @if ($solution->image)
                            <img src="{{ asset($solution->image) }}" alt="Current Image" class="mt-3"
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
                        @if ($solution->icon)
                            <img src="{{ asset($solution->icon) }}" alt="Current Icon" class="mt-3"
                                style="max-width: 100px;">
                        @endif
                    </div>

                    <div class="col-md-6" id="source-section">
                        <label class="form-label" for="product-name">Short Description</label>
                        <input type="text" id="product-name" name="short_desc" value="{{ $solution->short_desc }}"
                            class="form-control" placeholder="Enter short description" />
                        @error('short_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            placeholder="Enter Meta Title" value="{{ $solution->meta_title }}" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="location">Meta Description</label>
                        <input type="text" id="meta_desc" name="meta_desc" class="form-control"
                            placeholder="Enter Meta Description" value="{{ $solution->meta_desc }}" />
                        @error('meta_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Key Points</label>

                        <div id="key-points-wrapper">

                            @foreach ($solution->key_point ?? [] as $index => $point)
                                <div class="row mb-2 key-point-row">

                                    <div class="col-md-1">
                                        <input type="text" class="form-control serial-number"
                                            value="{{ $index + 1 }}" readonly>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" name="key_point[]" class="form-control"
                                            value="{{ $point }}">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-row">Remove</button>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                        <button type="button" class="btn btn-primary mt-2" id="add-key-point">
                            Add Key Point
                        </button>

                    </div>

                    <!-- Description Section -->
                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description', $solution->description) }}</textarea>
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

            function updateSerial() {

                document.querySelectorAll(".serial-number").forEach((el, index) => {

                    el.value = index + 1;

                });

            }

            addBtn.addEventListener("click", function() {

                let row = document.createElement("div");

                row.classList.add("row", "mb-2", "key-point-row");

                row.innerHTML = `

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

                wrapper.appendChild(row);

                updateSerial();

            });


            wrapper.addEventListener("click", function(e) {

                if (e.target.classList.contains("remove-row")) {

                    let rows = document.querySelectorAll(".key-point-row");

                    if (rows.length > 1) {

                        e.target.closest(".key-point-row").remove();

                        updateSerial();

                    }

                }

            });

        });
    </script>

</x-backend.app-layout>
