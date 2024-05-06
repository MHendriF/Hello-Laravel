<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    @foreach ($users as $item)
        <li>{{ $item['name'] }}</li>
        <li>{{ $item['name'] }}</li>
        <li>{{ $item['email'] }}</li>
    @endforeach
</body>

</html>
