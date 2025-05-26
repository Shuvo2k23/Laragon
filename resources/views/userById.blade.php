<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $key=>$item)
        <h1>Id: {{ $item->id }}</h1>
        <h1>Name: {{ $item->name }}</h1>
        <h1>Email: {{ $item->email }}</h1>
        <h1>Age: {{ $item->age }}</h1>
        <h1>City: {{ $item->city }}</h1>
    @endforeach
    
</body>
</html>