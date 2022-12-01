<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmasRequest;
use App\Models\Gold;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class GoldController extends Controller
{
    public function index(){
        return Gold::all();
    }


    public function store(EmasRequest $request){
        try{
           
            //create barang
            Gold::create([
                'nama' =>$request->nama,
                'emas'=> $request->emas,
                'nomor_hp' => $request->nomor_hp,
                
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

    
    public function show($id)
    {
        //return pertanyaan::find($id);
        //detail pertanyaan
        $golds = Gold::find($id);
        if (!$golds){
            return response()->json([
                'message' => 'pertanyaan Tidak ditemukan'
            ],404);
        }return response() ->json([
            'gold' => $golds
        ]);
    }

    
    public function destroy($id)
    {
        $golds = Gold::find($id);
        if(!$golds) {
            return response()->json([
                'message' => "Transaksi tidak Ditemukan"
            ],404);
        }

        

        //delete barang
        $golds->delete();

        return response()->json([
            'message' => "pertanyaan berhasil di hapus"
        ]);
    }


    public function indexEmas()
    {
        $gold = Gold::all();
        return view('gold.index_backend', compact('gold'));
    }

    public function detailEmas($id)
    {
        $gold = Gold::find($id);
        return view('gold.detail_gold',compact('gold'));
    }
    

    public function hapusBackend($id)
    {
        $gold = Gold::find($id);
        $gold->delete();
        return redirect()->route('admin.emas');
    }

}
