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
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>

                            <th>Category</th>

                            <th>Title</th>

                            <th>Image</th>
                            {{-- <th>Meta Title</th> --}}


                            {{-- <th>Meta Description</th> --}}
                            {{-- <th>Description</th> --}}
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if ($blog->category)
                                        {{ $blog->category }}
                                    @else
                                        <p class="text-danger">No category</p>
                                    @endif
                                </td>



                                <td>{{ $blog->title }}</td>

                                <td>

                                    <a href="{{ asset($blog->thumbnail) }}">
                                        <img src="{{ asset($blog->thumbnail) }}" class="w-px-40 h-auto rounded-circle"
                                            alt="blog Image">
                                    </a>


                                </td>


                                {{-- <td>{{ $blog->meta_title  }}</td> --}}
                                {{-- <td>
                                    @php
                                        $tagsArray = array_filter(explode(',', $blog->tag)); // Remove empty strings
                                    @endphp

                                    @if (count($tagsArray) > 0)
                                        @foreach ($tagsArray as $tag)
                                            <span class="tag">{{ $tag }}</span>
                                        @endforeach
                                    @else
                                        <span>N/A</span>
                                    @endif
                                </td> --}}


                                {{-- <td>{{ $blog->meta_desc }}</td> --}}
                                {{-- <td>{!! $blog->desc !!}</td> --}}

                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.blog.delete', $blog->id) }}"
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
