<x-backend.app-layout>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.faq.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Type</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $faq->type }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{!! $faq->answer !!}</td>
                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.faq.delete', $faq->id) }}" class="btn btn-danger mr-2">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Role Table -->
    </div>
</x-backend.app-layout>
