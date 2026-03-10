<x-backend.app-layout>

    <style>
        .testimony-box {
            max-height: 370px;
            overflow-y: scroll;
        }

        thead .table-header {
            position: sticky;
            top: 0;
            /* Position at the top of the container */
            background-color: #ffffff;
            /* Background color for the header */
            z-index: 10;
            /* Ensure header is above the rest of the table content */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow for better visibility */
        }
    </style>




    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.create.testimonial') }}" class="btn btn-primary mb-2">+ Create</a>

        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive testimony-box">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr class="table-header">
                            <th>S/N</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Designation</th>
                            <th>Testimony</th>
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($testimonial->image) }}" class="w-px-40 h-auto "
                                        alt="tesimonial_image">
                                </td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->company }}</td>
                                <td>{{ $testimonial->designation }}</td>
                                <td>{!! $testimonial->message !!}</td>
                                <td>
                                    <a href="{{ route('admin.delete.testimonial', $testimonial->id) }}"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </a>
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
