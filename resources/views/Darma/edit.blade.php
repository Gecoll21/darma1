<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Program</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            background: #effaf5;
        }

        .container {
            max-width: 650px;
            margin: 60px auto;
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
        }

        h1 {
            color: #164e3b;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
            color: #164e3b;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        textarea {
            height: 130px;
        }

        img {
            width: 200px;
            height: 130px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        button {
            border: none;
            background: #087f5b;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        a {
            color: #087f5b;
            margin-left: 10px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>
        Edit Program
    </h1>

    <br>

    <form
        action="{{ route('darma.update', $darma->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        @method('PUT')

        <div class="form-group">

            <label>
                Judul
            </label>

            <input
                type="text"
                name="judul"
                value="{{ $darma->judul }}"
                required
            >

        </div>

        <div class="form-group">

            <label>
                Deskripsi
            </label>

            <textarea name="deskripsi">{{ $darma->deskripsi }}</textarea>

        </div>

        @if($darma->gambar)

            <div class="form-group">

                <label>
                    Gambar Saat Ini
                </label>

                <br>

                <img
                    src="{{ asset('storage/' . $darma->gambar) }}"
                    alt="{{ $darma->judul }}"
                >

            </div>

        @endif

        <div class="form-group">

            <label>
                Ganti Gambar
            </label>

            <input
                type="file"
                name="gambar"
                accept="image/*"
            >

        </div>

        <button>
            Update Program
        </button>

        <a href="{{ route('home') }}">
            Kembali
        </a>

    </form>

</div>

</body>
</html>