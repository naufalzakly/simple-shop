<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    <a href="{{ route('post.create') }}">
        <button>Tambah</button>
    </a>
    <table>
        <th>
            <tr>
                <td>No</td>
                <td>Title</td>
                <td>Description</td>
            </tr>
        </th>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
