<?php

namespace App\Http\Controllers;

use App\Models\Darma;
use App\Models\Banom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DarmaController extends Controller
{
    /**
     * Halaman utama
     */
    public function home()
    {
        $darmas = Darma::latest()->get();
        $banoms = Banom::latest()->get();

        return view('darma.index', [
            'darmas' => $darmas,
            'banoms' => $banoms,
        ]);
    }

    /**
     * Menampilkan daftar program
     */
    public function index()
    {
        $darmas = Darma::latest()->get();
        $banoms = Banom::latest()->get();

        return view('darma.index', [
            'darmas' => $darmas,
            'banoms' => $banoms,
        ]);
    }

    /**
     * Form tambah program
     */
    public function create()
    {
        return view('darma.create');
    }

    /**
     * Menyimpan program
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('darma', 'public');
        }

        Darma::create($validated);

        return redirect()
            ->route('home')
            ->with('success', 'Program berhasil ditambahkan.');
    }

    /**
     * Detail program
     */
    public function show(Darma $darma)
    {
        return view('darma.show', compact('darma'));
    }

    /**
     * Form edit program
     */
    public function edit(Darma $darma)
    {
        return view('darma.edit', compact('darma'));
    }

    /**
     * Update program
     */
    public function update(Request $request, Darma $darma)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Jika upload gambar baru
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $darma->gambar &&
                Storage::disk('public')->exists($darma->gambar)
            ) {
                Storage::disk('public')->delete($darma->gambar);
            }

            // Simpan gambar baru
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('darma', 'public');
        }

        $darma->update($validated);

        return redirect()
            ->route('home')
            ->with('success', 'Program berhasil diperbarui.');
    }

    /**
     * Hapus program
     */
    public function destroy(Darma $darma)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus gambar dari storage
        |--------------------------------------------------------------------------
        */
        if (
            $darma->gambar &&
            Storage::disk('public')->exists($darma->gambar)
        ) {
            Storage::disk('public')->delete($darma->gambar);
        }

        /*
        |--------------------------------------------------------------------------
        | Hapus data database
        |--------------------------------------------------------------------------
        */
        $darma->delete();

        return redirect()
            ->route('home')
            ->with('success', 'Program berhasil dihapus.');
    }
}