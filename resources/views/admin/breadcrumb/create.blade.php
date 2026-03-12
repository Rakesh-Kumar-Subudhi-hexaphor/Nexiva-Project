<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Breadcrumb Image</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.breadcrumb.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6" id="category-section">
                        <label class="form-label" for="page_id">Select Page</label>
                        <select name="page_id" class="form-select" id="page_id">
                            <option value="">Select Page</option>

                            <option value="2">About Page</option>
                            <option value="3">Blog Page</option>
                            <option value="4">Service Page</option>
                            <option value="5">Contact Page</option>
                            <option value="6">Career Page</option>
                            <option value="7">Casestudy Page</option>
                            <option value="8">FAQ Page</option>
                            <option value="9">Industry Serve Page</option>
                            <option value="10">Solution Page</option>
                            <option value="11">Team Page</option>
                        </select>
                        @error('page_id')
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

                    <div class="col-md-12" id="sub-section">
                        <label class="form-label" for="multicol-username">Sub Heading</label>
                        <div class="input-group">
                            <input type="text" id="multicol-username" name="subHeading" class="form-control" />
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
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var typeSelect = document.getElementById('type');

            // Fields to show for all types
            var titleSection = document.getElementById('title-section');
            var imageSection = document.getElementById('image-section');
            var urlSection = document.getElementById('url-section');
            var authorSection = document.getElementById('author-section');
            var categorySection = document.getElementById('category-section');

            // Fields to show for News, Event, and Blog (excluding Video Blog)
            var metaTitleSection = document.getElementById('meta-title-section');
            var metaDescSection = document.getElementById('meta-desc-section');
            var tagsSection = document.getElementById('tags-section');
            var descSection = document.getElementById('desc-section');
            var sourceSection = document.getElementById('source-section');

            // Fields to show for Blog and Video Blog
            var metaFields = [metaTitleSection, metaDescSection, tagsSection, descSection];

            typeSelect.addEventListener('change', function() {
                var selectedType = typeSelect.value;

                // Always show Title and Image
                titleSection.style.display = "block";
                imageSection.style.display = "block";

                if (selectedType === "Blog" || selectedType === "Video Blog") {
                    // Show title, image, and url
                    urlSection.style.display = "block";

                    // Show category only for Blog
                    if (selectedType === "Blog") {
                        authorSection.style.display = "block";
                        categorySection.style.display = "block";
                    } else {
                        categorySection.style.display = "none";
                          authorSection.style.display = "none";
                    }

                    // Show meta fields for Blog but hide them for Video Blog
                    if (selectedType === "Video Blog") {
                        metaFields.forEach(function(field) {
                            field.style.display = "none";
                        });
                    } else {
                        metaFields.forEach(function(field) {
                            field.style.display = "block";
                        });
                    }

                } else {
                    // Hide title, image, and url
                    urlSection.style.display = "none";


                    // Show other fields for News and Event
                    metaFields.forEach(function(field) {
                        field.style.display = "block";
                    });

                    // Hide category
                    categorySection.style.display = "none";
                }
                if (selectedType === "News") {
                    sourceSection.style.display = "block";
                } else {
                    sourceSection.style.display = "none";
                }
            });
        });
    </script> --}}


</x-backend.app-layout>
