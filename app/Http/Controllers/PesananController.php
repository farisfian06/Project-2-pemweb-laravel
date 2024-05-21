<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $pesanan = Pesanan::all();
        return view('riwayatPesanan', ['pesanan' => $pesanan]);
    }
    public function pesan(Request $request)
    {
        $pesanan = new Pesanan;

        if ($request->nama_mobil == "Daihatsu Ayla") {
            $pesanan->id_mobil = 1;
        } 
        if ($request->nama_mobil == "Toyota Agya") {
            $pesanan->id_mobil = 2;
        } 
        if ($request->nama_mobil == "Grand New Avanza") {
            $pesanan->id_mobil = 3;
        } 
        if ($request->nama_mobil == "Honda Mobilio") {
            $pesanan->id_mobil = 4;
        } 
        if ($request->nama_mobil == "Isuzy Elf Long") {
            $pesanan->id_mobil = 5;
        } 
        if ($request->nama_mobil == "Toyota Hiace") {
            $pesanan->id_mobil = 6;
        }


        $pesanan->nama = $request->nama;
        $pesanan->telepon = $request->telepon;
        $pesanan->email = $request->email;
        $pesanan->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pesanan->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pesanan->bukti_transaksi = $request->bukti;
        $pesanan->save();
        return redirect('/riwayat-pemesanan');
    }
}
