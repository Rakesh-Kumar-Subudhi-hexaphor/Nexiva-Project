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
        <a href="{{ route('admin.casestudy.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>

                            <th>Title</th>


                            <th>Image</th>


                            <th>Short Description</th>
                            {{-- <th>Description</th> --}}
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($casestudies as $casestudy)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $casestudy->title }}</td>
                                <td>
                                    @if ($casestudy->image)
                                        <img src="{{ asset($casestudy->image) }}" alt="Image" class="img-thumbnail" style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>{{ $casestudy->short_desc }}</td>
                                <td>
                                    <div class="d-flex justify-content-start" style="gap: 7px;">
                                        <a href="{{ route('admin.casestudy.edit', $casestudy->id) }}" class="btn btn-info mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.casestudy.delete', $casestudy->id) }}" class="btn btn-danger mr-2">
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
