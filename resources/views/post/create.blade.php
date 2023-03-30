@extends('layouts.app')

@section('title', 'Post | Create')

@section('content')
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
@endsection
