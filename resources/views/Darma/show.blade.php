<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $darma->judul }}</title>

    <style>

        body {
            font-family: Arial;
            background: #effaf5;
            margin: 0;
        }

        .container {
            max-width: 700px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 18px;
        }

        img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 12px;
        }

        h1 {
            color: #164e3b;
        }

        p {
            color: #666;
            line-height: 1.8;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #087f5b;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
        }

    </style>

</head>

<body>

<div class="container">

    @if($darma->gambar)

        <img
            src="{{ asset('storage/' . $darma->gambar) }}"
            alt="{{ $darma->judul }}"
        >

    @endif

    <h1>
        {{ $darma->judul }}
    </h1>

    <p>
        {{ $darma->deskripsi }}
    </p>

    <a href="{{ route('home') }}">
        ← Kembali
    </a>

</div>

</body>

</html>