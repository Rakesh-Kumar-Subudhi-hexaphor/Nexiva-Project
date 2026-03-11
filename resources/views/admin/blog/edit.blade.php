<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Blog</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.blog.update', $blog->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <!-- Category (Only shown for Blog) -->
                    {{-- <div class="col-md-6" id="source-section">
                        <label class="form-label" for="product-name">Category</label>
                        <input type="text" id="product-name" name="category" value="{{ $blog->category }}"
                            class="form-control" placeholder="Enter category" />
                        @error('category')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div> --}}


                    <!-- Title (Only shown for Blog and Video Blog) -->
                    <div class="col-md-6" id="title-section">
                        <label class="form-label" for="product-name">Title</label>
                        <input type="text" id="product-name" name="title" class="form-control"
                            value="{{ old('title', $blog->title) }}" placeholder="Enter Title" />
                        @error('title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image (Only shown for Blog and Video Blog) -->
                    <div class="col-md-6" id="image-section">
                        <label class="form-label" for="multicol-username">Image</label>
                        <div class="input-group">
                            <input type="file" id="multicol-username" name="thumbnail" class="form-control" />
                        </div>

                        @error('thumbnail')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                        @if ($blog->thumbnail)
                            <img src="{{ asset($blog->thumbnail) }}" alt="Current Image" class="mt-3"
                                style="max-width: 100px;">
                        @endif
                    </div>



                    <!-- Meta Title Section -->
                    <div class="col-md-6" id="meta-title-section">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control"
                            value="{{ old('meta_title', $blog->meta_title) }}" placeholder="Enter Meta Title" />
                        @error('meta_title')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Tags (Hidden for Blog and Video Blog) -->
                    <div class="col-md-6" id="tags-section">
                        <label class="form-label" for="multicol-username">Blog Tags</label>
                        <textarea id="tagTextarea" name="tag[]" class="form-control" cols="30" rows="5"></textarea>
                        <div id="tag-container" style="display: flex; flex-wrap: wrap;">
                            <!-- Display existing tags -->
                            @foreach (explode(',', $blog->tag) as $tag)
                                <div
                                    class="tag-item d-flex gap-2 inline text-primary text-dark px-2 py-1 rounded-full mr-2 mb-2">
                                    {{ $tag }}
                                    <span class="cursor-pointer ml-1" onclick="removeTag(this)">✖</span>
                                </div>
                            @endforeach
                        </div>
                        <!-- Hidden Input to store the tags -->
                        <input type="hidden" name="tags_hidden" value="{{ old('tags_hidden', $blog->tag ?? '') }}"
                            id="tagsHiddenInput">

                        @error('tag')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var tagContainer = document.getElementById('tag-container');
                            var textarea = document.getElementById('tagTextarea');
                            var tagsHiddenInput = document.getElementById('tagsHiddenInput');

                            // Load existing tags on edit
                            if (tagsHiddenInput.value) {
                                processInput(tagsHiddenInput.value);
                            }

                            // Trigger when typing a comma
                            textarea.addEventListener('input', function() {
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

                            // Process string into tags
                            function processInput(inputText) {
                                inputText.split(',').forEach(function(tag) {
                                    addTag(tag.trim());
                                });
                                updateHiddenInput();
                            }

                            // Add single tag
                            function addTag(tagText) {
                                if (tagText !== "") {
                                    // prevent duplicates
                                    var existingTags = Array.from(tagContainer.children).map(el =>
                                        el.textContent.trim().replace(/\s+✖$/, '')
                                    );
                                    if (existingTags.includes(tagText)) return;

                                    var tagElement = document.createElement('div');
                                    tagElement.className =
                                        'tag-item d-flex gap-2 inline text-primary text-dark px-2 py-1 rounded-full mr-2 mb-2';
                                    tagElement.textContent = tagText;
                                    tagElement.innerHTML += ' <span class="cursor-pointer ml-1" onclick="removeTag(this)">✖</span>';
                                    tagContainer.appendChild(tagElement);
                                }
                            }

                            // Remove tag
                            tagContainer.addEventListener('click', function(event) {
                                if (event.target.tagName === 'SPAN' && event.target.classList.contains('cursor-pointer')) {
                                    removeTag(event.target.parentNode);
                                }
                            });

                            function removeTag(tagElement) {
                                tagContainer.removeChild(tagElement);
                                updateHiddenInput();
                            }

                            // Update hidden input with current tags
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
                        <textarea name="meta_desc" class="form-control" cols="30" rows="5">{{ old('meta_desc', $blog->meta_desc) }}</textarea>
                        @error('meta_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>




                    <!-- Description Section -->
                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="desc" class="form-control" id="description" cols="30" rows="10">{{ old('desc', $blog->desc) }}</textarea>
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




</x-backend.app-layout>
