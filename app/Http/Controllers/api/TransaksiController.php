<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::join('users', 'users_id', '=', 'users.id')
            ->select('transaksi.*', 'users.name as nama', 'users.telepon as telp')
            ->get();

        $transaksisLunas = Transaksi::join('users', 'users_id', '=', 'users.id')
            ->select('transaksi.*', 'users.name as nama', 'users.telepon as telp')
            ->where('transaksi.status', '=', 'lunas')
            ->get();

        return response()->json([
            'transaksis' => $transaksis,
            'transaksisLunas' => $transaksisLunas,
        ], 200);
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['error' => 'Transaksi not found'], 404);
        }

        return response()->json($transaksi, 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:lunas,tidak',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['error' => 'Transaksi not found'], 404);
        }

        $transaksi->status = $request->status;
        $transaksi->save();

        return response()->json(['message' => 'Transaksi updated successfully'], 200);
    }
}
