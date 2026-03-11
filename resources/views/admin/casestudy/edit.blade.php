<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Case Study</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.casestudy.update', $casestudy->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">


                    <!-- Category (Only shown for Blog) -->



                    <!-- Title (Only shown for Blog and Video Blog) -->
                    <div class="col-md-6" id="title-section">
                        <label class="form-label" for="product-name">Title</label>
                        <input type="text" id="product-name" name="title" class="form-control"
                            value="{{ old('title', $casestudy->title) }}" placeholder="Enter Title" />
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
                        @if ($casestudy->image)
                            <img src="{{ asset($casestudy->image) }}" alt="Current Image" class="mt-3"
                                style="max-width: 100px;">
                        @endif
                    </div>

                    <div class="col-md-6" id="source-section">
                        <label class="form-label" for="product-name">Short Description</label>
                        <input type="text" id="product-name" name="short_desc" value="{{ $casestudy->short_desc }}"
                            class="form-control" placeholder="Enter short description" />
                        @error('short_desc')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Client</label>

                        <input type="text" name="client" class="form-control"
                            value="{{ old('client', $casestudy->client) }}">
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Completion Date</label>

                        <input type="date" name="date" class="form-control"
                            value="{{ old('date', $casestudy->date) }}">
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">URL</label>

                        <input type="url" name="url" class="form-control"
                            value="{{ old('url', $casestudy->url) }}">
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

                        <label class="form-label">Services</label>

                        <div class="row">

                            @foreach ($services as $service)
                                <div class="col-md-3 mb-2">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" name="service[]"
                                            value="{{ $service->id }}" id="service{{ $service->id }}"
                                            @if (in_array($service->id, $casestudy->service ?? [])) checked @endif>

                                        <label class="form-check-label" for="service{{ $service->id }}">
                                            {{ $service->title }}
                                        </label>

                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>

                    <!-- Description Section -->
                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description', $casestudy->description) }}</textarea>
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

</x-backend.app-layout>
