<x-backend.app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit FAQ</h4>

        <div class="card mb-4">

            <form class="card-body" action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
                @csrf
             

                <div class="row g-3">

                    <!-- Type -->
                    <div class="col-md-12">
                        <label class="form-label" for="type">Select Type</label>
                        <select name="type" class="form-select" id="type">
                            <option value="">Select Type</option>

                            <option value="Main" {{ $faq->type == 'Main' ? 'selected' : '' }}>
                                Main Faq
                            </option>

                            <option value="Career" {{ $faq->type == 'Career' ? 'selected' : '' }}>
                                Career Faq
                            </option>

                        </select>

                        @error('type')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Question -->
                    <div class="col-md-12">
                        <label class="form-label">Question</label>
                        <div class="input-group">
                            <input type="text" name="question" class="form-control"
                                value="{{ old('question', $faq->question) }}" />
                        </div>

                        @error('question')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Answer -->
                    <div class="col-md-12">
                        <label class="form-label">Answer</label>
                        <textarea name="answer" class="form-control" cols="30" rows="10">{{ old('answer', $faq->answer) }}</textarea>

                        @error('answer')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">
                        Update
                    </button>

                    <a href="{{ route('admin.faq') }}" class="btn btn-label-secondary">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </div>
</x-backend.app-layout>
