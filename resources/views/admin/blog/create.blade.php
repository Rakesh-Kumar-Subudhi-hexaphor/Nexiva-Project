<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add Blog</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6" id="source-section" >
                        <label class="form-label" for="product-name">Category</label>
                        <input type="text" id="product-name" name="category" class="form-control"
                            placeholder="Enter category" />
                        @error('category')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="title-section" >
                        <label class="form-label" for="product-name">Title</label>
                        <input type="text" id="product-name" name="title" class="form-control"
                            placeholder="Enter Title"   maxlength="60" />
                        @error('title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="image-section" >
                        <label class="form-label" for="multicol-username">Image</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="thumbnail" class="form-control" />
                        </div>
                        @error('thumbnail')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <div class="col-md-6" id="url-section" >
                        <label class="form-label" for="product-name">Url</label>
                        <input type="text" id="product-name" name="url" class="form-control"
                            placeholder="Enter url" />
                        @error('url')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div> --}}


                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            placeholder="Enter Meta Title" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6" id="tags-section">
                        <label class="form-label" for="multicol-username">Blog Tags</label>
                        <textarea id="tagTextarea" name="tag[]" class="form-control" cols="30" rows="5"></textarea>
                        <div id="tag-container" style="display: flex; flex-wrap: wrap;"></div>
                        <input type="hidden" name="tags_hidden" id="tagsHiddenInput">
                        @error('tag')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                   <script>
document.addEventListener("DOMContentLoaded", function() {
    var tagContainer = document.getElementById('tag-container');
    var textarea = document.getElementById('tagTextarea');
    var tagsHiddenInput = document.getElementById('tagsHiddenInput');

    // Trigger when typing a comma
    textarea.addEventListener('input', function(event) {
        let value = textarea.value;
        if (value.includes(',')) {
            processInput(value);
            textarea.value = ''; // clear input after making tags
        }
    });

    // Handle paste (comma-separated tags)
    textarea.addEventListener('paste', function(event) {
        event.preventDefault();
        var paste = (event.clipboardData || window.clipboardData).getData('text');
        processInput(paste);
        textarea.value = '';
    });

    function processInput(inputText) {
        inputText.split(',').forEach(function(tag) {
            addTag(tag.trim());
        });
        updateHiddenInput();
    }

    function addTag(tagText) {
        if (tagText !== "") {
            var tagElement = document.createElement('div');
            tagElement.className =
                'tag-item d-flex gap-2 inline text-primary text-dark px-2 py-1 rounded-full mr-2 mb-2';
            tagElement.textContent = tagText;
            tagElement.innerHTML += ' <span class="cursor-pointer ml-1" onclick="removeTag(this)">✖</span>';
            tagContainer.appendChild(tagElement);
        }
    }

    tagContainer.addEventListener('click', function(event) {
        if (event.target.tagName === 'SPAN' && event.target.classList.contains('cursor-pointer')) {
            removeTag(event.target.parentNode);
        }
        updateHiddenInput();
    });

    function removeTag(tagElement) {
        tagContainer.removeChild(tagElement);
        updateHiddenInput();
    }

    function updateHiddenInput() {
        var tags = Array.from(tagContainer.children)
            .map(function(tagElement) {
                return tagElement.textContent.trim().replace(/\s+✖$/, '');
            })
            .filter(Boolean);

        tagsHiddenInput.value = tags.join(',');
    }
});
</script>

                    <!-- Meta Description Section -->
                    <div class="col-md-6" id="meta-desc-section">
                        <label class="form-label" for="meta_desc">Meta Description</label>
                        <textarea name="meta_desc" class="form-control" cols="30" rows="5" maxlength="160"></textarea>
                        @error('meta_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="desc" class="form-control" id="description" cols="30" rows="10"></textarea>
                        @error('desc')
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
