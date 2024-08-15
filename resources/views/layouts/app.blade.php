<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body, html {
            height: 100%;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">CRUD Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Buku</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="content container mt-5">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center text-lg-start py-4 mt-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-left">
                        <h5 class="text-uppercase">CRUD Buku</h5>
                        <p>
                            Sistem manajemen data buku sederhana yang memungkinkan Admin menambah, mengedit, dan menghapus buku.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-right">
                        <h5 class="text-uppercase">Links</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('home') }}" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('books.index') }}" class="text-white">Daftar Buku</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ route('books.create') }}" class="text-white">Tambah Buku</a>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
            <div class="text-center py-3 bg-secondary">
                &copy; 2024 Agus Devanda CRUD Buku. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>
