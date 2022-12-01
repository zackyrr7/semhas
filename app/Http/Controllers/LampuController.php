<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lampu;
use App\Http\Requests\LampuRequest;

class LampuController extends Controller
{
    public function index(){
        return Lampu::all();
    }


    public function store(LampuRequest $request){
        try{
           
            //create barang
            Lampu::create([
                'nama' =>$request->nama,
                'nomor_hp'=> $request->nomor_hp,
                'PLN' => $request->PLN
                
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
        $lampu = Lampu::find($id);
        if(!$lampu) {
            return response()->json([
                'message' => "Pertanyaan tidak Ditemukan"
            ],404);
        }

        

        //delete barang
        $lampu->delete();

        return response()->json([
            'message' => "pertanyaan berhasil di hapus"
        ]);
    }

    public function indexLampu()
    {
        $lampu = Lampu::all();
        return view('lampu.index_backend', compact('lampu'));
    }

    public function detailLampu($id)
    {
        $lampu = Lampu::find($id);
        return view('lampu.detail_lampu',compact('lampu'));
    }
    

    public function hapusBackend($id)
    {
        $lampu = Lampu::find($id);
        $lampu->delete();
        return redirect()->route('admin.listrik');
    }
}
