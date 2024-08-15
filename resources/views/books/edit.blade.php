@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="container mb-5">
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Pengarang:</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi:</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $book->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">File PDF:</label>
            <input type="file" name="file" id="file" class="form-control" accept="application/pdf">
            @if ($book->file_path)
                <p>File saat ini: {{ basename($book->file_path) }}</p>
            @endif
        </div>        

        <div class="d-flex">
            <button type="submit" class="btn btn-primary" style="margin-right: 1rem;">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
