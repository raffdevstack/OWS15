<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>File</th>
    </tr>

    @foreach ($data as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->file}}</td>
        </tr>
    @endforeach
</body>
</html>