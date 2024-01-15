<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_produk' => 'required',
                'deskripsi' => 'required',
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'harga' => 'required|numeric',
            ]);

            // Upload foto ke direktori storage
            $fotoPath = $request->file('foto')->store('public/produks');

            // Simpan produk baru ke database
            Produk::create([
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'foto' => $fotoPath,
                'harga' => $request->harga,
            ]);

            return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Log pesan kesalahan
            Log::error($e->getMessage());

            // Redirect dengan pesan kesalahan
            return redirect()->route('produk')->with('error', 'Terjadi kesalahan. Produk gagal ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        // Anda bisa melempar variabel $produk ke view edit
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Temukan produk yang akan diupdate
        $produk = Produk::findOrFail($id);

        // Periksa apakah foto baru dipilih
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            Storage::delete($produk->foto);

            // Upload foto baru ke direktori storage
            $fotoPath = $request->file('foto')->store('public/produks');

            // Simpan path foto baru ke dalam database
            $produk->update([
                'foto' => $fotoPath,
            ]);
        }

        // Update data produk lainnya
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('produk')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus data produk (yang akan memicu event deleting)
        $produk->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }
}
