@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="container mb-5">
    <h1>Tambah Buku</h1>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Pengarang:</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi:</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">File PDF:</label>
            <input type="file" name="file" id="file" class="form-control" accept="application/pdf" required>
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary" style="margin-right: 1rem;">Simpan</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
