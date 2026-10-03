<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Control Banom NU</title>

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
            max-width: 1100px;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #164e3b;
        }

        .top {
            text-align: center;
            margin: 25px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .add {
            background: #087f5b;
            color: white;
        }

        .home {
            background: #ddd;
            color: #333;
        }

        .grid {
            display: grid;
            grid-template-columns:
                repeat(5, 1fr);
            gap: 15px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 7px 20px rgba(0,0,0,.06);
        }

        .card img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h3 {
            color: #164e3b;
            font-size: 15px;
        }

        .card p {
            color: #777;
            font-size: 11px;
        }

        .edit {
            background: #e7a91e;
            color: white;
        }

        .delete {
            background: #dc3545;
            color: white;
        }

        @media(max-width: 800px) {
            .grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }
        }

    </style>

</head>

<body>

<div class="container">

    <h1>
        CONTROL BANOM NU
    </h1>

    <div class="top">

        <a
            href="{{ route('banom.create') }}"
            class="btn add"
        >
            + Tambah Banom
        </a>

        <a
            href="{{ route('home') }}"
            class="btn home"
        >
            ← Halaman Utama
        </a>

    </div>

    @if(session('success'))

        <div style="
            background:#dff5e8;
            color:#087f5b;
            padding:12px;
            border-radius:8px;
            margin-bottom:20px;
            text-align:center;
        ">

            {{ session('success') }}

        </div>

    @endif


    <div class="grid">

        @forelse($banoms as $banom)

            <div class="card">

                @if($banom->gambar)

                    <img
                        src="{{ asset('storage/' . $banom->gambar) }}"
                        alt="{{ $banom->nama }}"
                    >

                @else

                    <div style="
                        height:130px;
                        background:#e7f6ee;
                        border-radius:10px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-size:40px;
                        color:#087f5b;
                    ">
                        ✺
                    </div>

                @endif

                <h3>
                    {{ $banom->nama }}
                </h3>

                <p>
                    {{ $banom->deskripsi }}
                </p>

                <a
                    href="{{ route('banom.edit', $banom->id) }}"
                    class="btn edit"
                >
                    Edit
                </a>

                <form
                    action="{{ route('banom.destroy', $banom->id) }}"
                    method="POST"
                    style="display:inline"
                    onsubmit="return confirm('Hapus Banom ini?')"
                >

                    @csrf

                    @method('DELETE')

                    <button
                        type="submit"
                        class="btn delete"
                    >
                        Hapus
                    </button>

                </form>

            </div>

        @empty

            <div style="
                grid-column:1/-1;
                text-align:center;
                padding:50px;
            ">

                Belum ada data Banom.

            </div>

        @endforelse

    </div>

</div>

</body>

</html>