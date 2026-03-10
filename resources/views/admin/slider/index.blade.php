<x-backend.app-layout>
    <div class="bg-white m-3 p-3">
        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary mb-2">+ Create</a>
        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $banner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $banner->title }}</td>
                                <td><a href="{{ asset($banner->image) }}" target="_blank" rel="noopener noreferrer"><img
                                            src="{{ asset($banner->image) }}" class="w-px-40 h-auto"
                                            alt="Banner_image"></a></td>
                                <td>
                                    <a href="{{ route('admin.slider.delete', $banner->id) }}" class="btn btn-danger">
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
