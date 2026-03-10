<x-backend.app-layout>

    <style>
        .message-container {
            position: relative;
        }

        .message-preview {
            margin: 0;
        }

        .message-full {
            margin: 0;
            margin-top: 10px;
        }

        .read-more {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
    <div class="bg-white m-3 p-3">

        <!-- Role Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>subject</th>
                            <th>Message</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>
                                    <div class="message-container">
                                        <p class="message-preview">{{ Str::words($contact->message, 30) }}</p>
                                        <p class="message-full" style="display: none;">{{ $contact->message }}</p>
                                        <a href="#" class="read-more" onclick="toggleMessage(event, this)">Read
                                            More</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('admin.contact.delete', $contact->id) }}" class="btn btn-danger">
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

    <script>
        function toggleMessage(event, link) {
            event.preventDefault();

            const messageContainer = link.closest('.message-container');
            const fullMessage = messageContainer.querySelector('.message-full');
            const previewMessage = messageContainer.querySelector('.message-preview');
            const isShowing = fullMessage.style.display === 'block';

            if (isShowing) {
                fullMessage.style.display = 'none';
                previewMessage.style.display = 'block';
                link.textContent = 'Read More';
            } else {
                fullMessage.style.display = 'block';
                previewMessage.style.display = 'none';
                link.textContent = 'Show Less';
            }
        }
    </script>

</x-backend.app-layout>
