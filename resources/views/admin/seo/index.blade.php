<x-backend.app-layout>

    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.seo.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Page Name</th>
                            <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $pages = [
                                1 => 'Home Page',
                                2 => 'About Page',
                                3 => 'Blog Page',
                                4 => 'Service Page',
                                5 => 'Contact Page',
                                6 => 'Career Page',
                                7 => 'Casestudy Page',
                                8 => 'Faq Page',
                                9 => 'Industry Serve Page',
                                10 => 'Solution Page',
                                11 => 'Team Page',
                            ];
                        @endphp
                        @foreach ($seos as $seo)
                            <tr>
                                <td>{{ $loop->iteration }}</td>



                                <td>
                                    {{ $pages[$seo->page_id] ?? 'No category' }}
                                </td>


                                <td>{{ $seo->meta_title }}</td>
                                <td>{{ $seo->meta_desc }}</td>
                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.seo.edit', $seo->id) }}" class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.seo.delete', $seo->id) }}" class="btn btn-danger mr-2">
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
    </div>
</x-backend.app-layout>
