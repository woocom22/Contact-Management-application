<x-layout>
    <div>
        <div class="table-responsive mt-4">
            <table class="center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th>{{ $contact->id }}</th>
                        <th>{{ $contact->name }}</th>
                        <th>{{ $contact->email }}</th>
                        <th>{{ $contact->phone }}</th>
                        <th>{{ $contact->address }}</th>
                        <th><a href="/contacts/{{ $contact->id }}/edit"><button type="button">Edit</button></a></th>
                        <th><a href="/contacts/{{ $contact->id }}/delete"><button type="reset">Delete</button></a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-layout>
