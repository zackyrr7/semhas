<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TabunganController extends Controller
{
    // public function index()
    // {
    //     $tabungans = Tabungan::all();
    //     return $tabungans;
    // }

    public function formTambahTabungan()
    {
        return view('admin.tabungan.tabunganFormTambah');
    }
    public function index(Request $request)
    {
        if ($request->has('uid')) {
            $tabungans = Tabungan::where('user_id', $request->uid)->get();
            return $tabungans;
        } else {
            $tabungans = Tabungan::all();
            return $tabungans;
        }
    }

    public function store(Request $request)
    {
        $tabungans = new Tabungan();
        $tabungans->user_id = $request->user_id;
        $tabungans->total = $request->total;
        $tabungans->tanggal = $request->tanggal;
        $tabungans->save();
        return back()->with('message', 'Berhasil ditambahkan');
    }
    // public function store(Request $request)
    // {
    //     $checTab  = Tabungan::Where('user_id', auth('sanctum')->user()->id)->null();
    //     if ($checTab) {
    //         $checTab->user_id = $request->user_id; //insert via token by sanctum kalo ndak bisa ganti $request->user_id;
    //         $checTab->tanggal = $request->tanggal;
    //         $checTab->total = $checTab->total + $request->total;
    //         $checTab->update();
    //     } else {

    //         $tabungan = new Tabungan();
    //         $tabungan->user_id = $request->user_id; //insert via token by sanctum kalo ndak bisa ganti $request->user_id;
    //         $tabungan->tanggal = $request->tanggal;
    //         $tabungan->total = $request->total;
    //         $tabungan->save();
    //     }
    // }


    public function update(Request $request, $id)
    {
        try {
            //menemukan pertanyaan
            $tabungans = Tabungan::find($id);
            if (!$tabungans) {
                return response()->json([
                    'message' => 'tabungan tidak ditemukan'
                ], 404);
            }

            $tabungans->total = $request->total;
            $tabungans->tanggal = $request->tanggal;




            //update pertanyaan
            $tabungans->save();

            //respon json
            return response()->json([
                'message' => 'Tabungan berhasil diupdate'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went really wrong"
            ]);
        }
    }


    public function indexTabungan()
    {
        $user = User::all();
        return view('tabungan.index', compact('user'));
    }

    public function detailTabungan($id)
    {
        $user = User::find($id);
        $tabungan = Tabungan::where('user_id', $id)->get();

        $totalTabungan = 0;
        foreach ($tabungan as $tbg) {
            $totalTabungan += $tbg->total;
        }
        return view('tabungan.detail_tabungan', compact('user', 'tabungan', 'totalTabungan'));
    }
    public function deleteTabungan(Request $request, $id)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->delete();
        return back()->with('message', 'Tabungan berhasil dihapus');
    }
}
