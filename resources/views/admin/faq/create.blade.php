<x-backend.app-layout>
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Add FAQ</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.faq.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="col-md-12" id="category-section">
                        <label class="form-label" for="type">Select Type</label>
                        <select name="type" class="form-select" id="type">
                            <option value="">Select Type</option>
                            <option value="Main">Main Faq</option>
                            <option value="Career">Career Faq</option>
                        </select>
                        @error('type')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12" id="sub-section">
                        <label class="form-label" for="multicol-username">Question</label>
                        <div class="input-group">
                            <input type="text" id="multicol-username" name="question" class="form-control" />
                        </div>
                        @error('question')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12" id="desc-section">
                        <label class="form-label" for="answer">Answer</label>
                        <textarea name="answer" class="form-control" id="description" cols="30" rows="10"></textarea>
                        @error('answer')
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
