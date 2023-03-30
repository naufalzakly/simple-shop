@extends('layouts.app')

@section('title', 'Post')

@section('content')
    @auth
        <a href="{{ route('post.create') }}">
            <button>Tambah</button>
        </a>
    @endauth
    
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
@endsection
