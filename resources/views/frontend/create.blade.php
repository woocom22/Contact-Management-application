<x-layout>
    <a href="{{ route('form.post') }}"><button class="success">Home</button></a>
    <form class="mt-4" method="POST" action="{{ route('form.post') }}">
        @csrf
        <fieldset>
            <legend>Contact create form</legend>
            <label>
                Name:
                <input name="name" type="text" placeholder="Enter your name">
            </label>
            <label>
                Email:
                <input name="email" type="email" placeholder="Enter your email">
            </label>
            <label>
                Phone:
                <input name="phone" type="tel" placeholder="Enter your phone number">
            </label>
            <label>
                Address:
                <textarea name="address" rows=""></textarea>
            </label>
            <input type="submit" value="Submit">
            <p>{{ session('name') }}</p>
            <p>{{ session('email') }}</p>
            <p>{{ session('phone') }}</p>
            <p>{{ session('success') }}</p>
        </fieldset>
    </form>
</x-layout>
