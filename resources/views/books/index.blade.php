@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h1 class="mb-4">Daftar Buku</h1>

    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">
        <i class="fa-solid fa-plus"></i> Tambah Buku</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ ($books->currentPage() - 1) * $books->perPage() + $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm" style="margin-right: 8px;">
                            <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="margin-right: 8px;">
                                <i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                        <a href="{{ route('books.read', $book->id) }}" class="btn btn-success btn-sm" target="_blank">
                            <i class="fa-solid fa-book"></i> Baca</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $books->links($paginationView ?? 'vendor.pagination.custom-pagination') }}
    </div>
@endsection
