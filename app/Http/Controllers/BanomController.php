<?php

namespace App\Http\Controllers;

use App\Models\Banom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanomController extends Controller
{
    public function index()
    {
        $banoms = Banom::latest()->get();

        return view('banom.index', compact('banoms'));
    }

    public function create()
    {
        return view('banom.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request
                ->file('gambar')
                ->store('banom', 'public');
        }

        Banom::create($data);

        return redirect()
            ->route('banom.index')
            ->with('success', 'Banom berhasil ditambahkan.');
    }

    public function edit(Banom $banom)
    {
        return view('banom.edit', compact('banom'));
    }

    public function update(Request $request, Banom $banom)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {

            if (
                $banom->gambar &&
                Storage::disk('public')->exists($banom->gambar)
            ) {
                Storage::disk('public')->delete($banom->gambar);
            }

            $data['gambar'] = $request
                ->file('gambar')
                ->store('banom', 'public');
        }

        $banom->update($data);

        return redirect()
            ->route('banom.index')
            ->with('success', 'Banom berhasil diperbarui.');
    }

    public function destroy(Banom $banom)
    {
        if (
            $banom->gambar &&
            Storage::disk('public')->exists($banom->gambar)
        ) {
            Storage::disk('public')->delete($banom->gambar);
        }

        $banom->delete();

        return redirect()
            ->route('banom.index')
            ->with('success', 'Banom berhasil dihapus.');
    }
}