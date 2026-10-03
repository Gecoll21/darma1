<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Banom</title>

    <style>

        body {
            margin: 0;
            font-family: Arial;
            background: #effaf5;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: white;
            padding: 35px;
            border-radius: 18px;
        }

        h1 {
            color: #164e3b;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            color: #164e3b;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        textarea {
            height: 120px;
        }

        img {
            width: 220px;
            height: 140px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        button {
            background: #087f5b;
            color: white;
            border: none;
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
        Edit Banom NU
    </h1>

    <form
        action="{{ route('banom.update', $banom->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        @method('PUT')

        <div class="form-group">

            <label>
                Nama Banom
            </label>

            <input
                type="text"
                name="nama"
                value="{{ $banom->nama }}"
                required
            >

        </div>

        <div class="form-group">

            <label>
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
            >{{ $banom->deskripsi }}</textarea>

        </div>

        @if($banom->gambar)

            <div class="form-group">

                <label>
                    Gambar Sekarang
                </label>

                <br>

                <img
                    src="{{ asset('storage/' . $banom->gambar) }}"
                    alt="{{ $banom->nama }}"
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
            Update Banom
        </button>

        <a href="{{ route('banom.index') }}">
            Kembali
        </a>

    </form>

</div>

</body>

</html>