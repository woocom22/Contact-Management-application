<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Document</title>
</head>
<body>
    <div>

            <div class="table-responsive">
                <table class="center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <th>{{ $contact->name }}</th>
                            <th>{{ $contact->email }}</th>
                            <th>{{ $contact->phone }}</th>
                            <th>{{ $contact->address }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>
</body>
</html>
