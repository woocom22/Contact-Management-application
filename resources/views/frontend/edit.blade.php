<x-layout>
    <div>
        <form class="mt-4" method="post" action="{{ route('form.update', $contact->id) }}">
            @csrf

            <fieldset>
                <legend>Contact create form</legend>
                <label>
                    Name:
                    <input name="name" type="text" placeholder="Enter your name" value="{{ $contact->name }}">
                </label>
                <label>
                    Email:
                    <input name="email" type="email" placeholder="Enter your email" value="{{ $contact->email }}">
                </label>
                <label>
                    Phone:
                    <input name="phone" type="tel" placeholder="Enter your phone number" value="{{ $contact->phone }}">
                </label>
                <label>
                    Address:
                    <textarea name="address" rows="">{{ $contact->address }}</textarea>
                </label>
                <input type="submit" value="Edit Contact">
                <p>{{ session('name') }}</p>
                <p>{{ session('email') }}</p>
                <p>{{ session('phone') }}</p>
                <p>{{ session('success') }}</p>
            </fieldset>
        </form>
    </div>
</x-layout>
