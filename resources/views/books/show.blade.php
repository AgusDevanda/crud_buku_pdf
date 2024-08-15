@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h1>Detail Buku</h1>

    <p><strong>Judul:</strong> {{ $book->title }}</p>
    <p><strong>Pengarang:</strong> {{ $book->author }}</p>
    <p><strong>Deskripsi:</strong> {{ $book->description }}</p>

    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>

    <a href="{{ route('books.read', $book->id) }}" target="_blank">Baca</a>

    <a href="{{ route('books.index') }}">Kembali</a>
@endsection
