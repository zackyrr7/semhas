<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdam;
use App\Http\Requests\PdamRequest;

class PdamController extends Controller
{
    public function index(){
        return Pdam::all();
    }


    public function store(PdamRequest $request){
        try{
           
            //create barang
            Pdam::create([
                'nama' =>$request->nama,
                'nomor_hp'=> $request->nomor_hp,
                'air' => $request->air
                
            ]);
           
       
        
            //Json Response
            return response()->json([
                'message' => "Transaksi berhasil ditambahkan"
            ],200);
        }catch(\Exception $e) {
            return response()->json([
                'message' => "something went really wrong"
            ],500);
        }
    }

    public function destroy($id)
    {
        $pdam = Pdam::find($id);
        if(!$pdam) {
            return response()->json([
                'message' => "Transaksi tidak Ditemukan"
            ],404);
        }

        

        //delete barang
        $pdam->delete();

        return response()->json([
            'message' => "Transaksi berhasil di hapus"
        ]);
    }

    public function indexPdam()
    {
        $pdam = Pdam::all();
        return view('pdam.index_backend', compact('pdam'));
    }

    public function detailPdam($id)
    {
        $pdam = Pdam::find($id);
        return view('pdam.detail_pdam',compact('pdam'));
    }
    

    public function hapusBackend($id)
    {
        $pdam = Pdam::find($id);
        $pdam->delete();
        return redirect()->route('admin.pdam');
    }
}
