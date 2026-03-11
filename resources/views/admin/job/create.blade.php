<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Job</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.job.store') }}" method="POST" enctype="multipart/form-data">
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

                    <div class="col-md-12" id="category-section">
                        <label class="form-label" for="type">Select Type</label>
                        <select name="type" class="form-select" id="type">
                            <option value="">Select Type</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Contractual">Contractual</option>
                            <option value="Internship">Internship</option>
                        </select>
                        @error('type')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12" id="category-section">
                        <label class="form-label" for="type">Select Location</label>
                        <select name="location" class="form-select" id="location">
                            <option value="">Select Location</option>
                            <option value="In Office">In Office</option>
                            <option value="Remote">Remote</option>
                            <option value="Work From Home">Work From Home</option>
                        </select>
                        @error('location')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Requirements</label>

                        <div id="key-points-wrapper">

                            <div class="row mb-2 key-point-row">
                                <div class="col-md-1">
                                    <input type="text" class="form-control serial-number" value="1" readonly>
                                </div>

                                <div class="col-md-9">
                                    <input type="text" name="requirement[]" class="form-control"
                                        placeholder="Enter Requirement">
                                </div>

                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-row">Remove</button>
                                </div>
                            </div>

                        </div>

                        <!-- ADD BUTTON OUTSIDE -->
                        <button type="button" class="btn btn-primary mt-2" id="add-key-point">
                            Add Requirement
                        </button>

                        @error('requirement')
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
                <input type="text" name="requirement[]" class="form-control"
                    placeholder="Enter Requirement">
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
