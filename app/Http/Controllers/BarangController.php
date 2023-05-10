<?php

namespace App\Http\Controllers;

use\App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function createBarang() {
        return view('createBarang');
    }

    public function storeBarang(Request $request) {
        Barang::create([
            'KategoriBarang' => $request->KategoriBarang,
            'NamaBarang' => $request->NamaBarang,
            'HargaBarang' => $request->HargaBarang,
            'JumlahBarang' => $request->JumlahBarang,
            'FotoBarang' => $request->FotoBarang,
        ]);

        return redirect('/');
    }
    
    public function show(){
        $barangbarang = Barang::all();
        return view('welcome', compact('barangbarang'));
    }

}
