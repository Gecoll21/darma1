<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Program - NU Darma</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #164e3b;
        }

        .form-group {
            margin-bottom: 18px;
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

        .btn {
            border: none;
            background: #087f5b;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        .back {
            color: #087f5b;
            margin-left: 10px;
        }

        .error {
            background: #ffe5e5;
            color: #b42318;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>
        + Tambah Program NU Darma
    </h1>

    @if($errors->any())

        <div class="error">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form
        action="{{ route('darma.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        <div class="form-group">

            <label>
                Judul Program
            </label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul') }}"
                required
            >

        </div>

        <div class="form-group">

            <label>
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
            >{{ old('deskripsi') }}</textarea>

        </div>

        <div class="form-group">

            <label>
                Gambar Program
            </label>

            <input
                type="file"
                name="gambar"
                accept="image/*"
            >

        </div>

        <button class="btn">
            Simpan Program
        </button>

        <a
            href="{{ route('home') }}"
            class="back"
        >
            Kembali
        </a>

    </form>

</div>

</body>
</html>