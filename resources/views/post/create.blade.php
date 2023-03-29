<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <a href="{{ route('post.index') }}" type="button">
        <button>kembali</button>
    </a>
    <br>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">
        <br>
        <label for="">Description</label>
        <input type="text" name="description">
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>