<?php

namespace App\Http\Controllers;

use App\Models\Historylelang;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenawaranController extends Controller
{
    public function penawaran(Request $request, $idLelang, $idBarang)
    {
        $history = Historylelang::where('id_lelang_15480', $idLelang)->orderBy('penawaran_15480', 'desc')->first();

        if ($history == null) {
            $lelang = Lelang::where('id_15480', $idLelang)->firstOrFail();
            $gt = $lelang->barang->harga_awal_15480;
        } else {
            $gt = $history->penawaran_15480;
        }

        $validatedData = $request->validate([
            'penawaran_15480' => 'required|numeric|gt:' . $gt,
        ]);

        $validatedData['id_lelang_15480'] = $idLelang;
        $validatedData['id_barang_15480'] = $idBarang;
        $validatedData['id_masyarakat_15480'] = Auth::guard('masyarakat')->user()->id_15480;


        HistoryLelang::create($validatedData);
        return redirect('');
    }
}
