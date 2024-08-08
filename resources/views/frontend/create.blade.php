<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Contact form</title>
</head>
<body>
<h1>
    <form method="POST" action="{{ route('form.post') }}">
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
</h1>
</body>
</html>
