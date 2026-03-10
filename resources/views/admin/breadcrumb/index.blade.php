<x-backend.app-layout>
    <style>
        .tag {
            display: inline-block;
            padding: 2px 5px;
            margin: 5px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            font-size: 10px;
        }
    </style>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.breadcrumb.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Page Name</th>
                            <th>Image</th>
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
                                7 => 'Achievement Page',
                                8 => 'Event Page',
                                9 => 'Recent Work Page',
                                10 => 'Terms & Condition Page',
                                11 => 'Terms of Sales Page',
                            ];
                        @endphp
                        @foreach ($breadcrumbs as $breadcrumb)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $pages[$breadcrumb->page_id] ?? 'No category' }}
                                </td>


                                <td>

                                    <a href="{{ asset($breadcrumb->image) }}">
                                        <img src="{{ asset($breadcrumb->image) }}" class="w-px-40 h-auto rounded-circle"
                                            alt="breadcrumb Image">
                                    </a>


                                </td>

                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.breadcrumb.edit', $breadcrumb->id) }}"
                                            class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.breadcrumb.delete', $breadcrumb->id) }}"
                                            class="btn btn-danger mr-2">
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
