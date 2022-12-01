<?php

namespace App\Http\Controllers;

use App\Http\Requests\PertanyaanRequest;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PertanyaanController extends Controller
{
    public function index(){
        return Pertanyaan::all();
    }


    public function store(PertanyaanRequest $request){
        try{
           
            //create barang
            Pertanyaan::create([
                'judul' =>$request->judul,
                'jawaban'=> $request->jawaban,
                
            ]);
             //return Pertanyaan::create($request->all());
       
        
            //Json Response
            return response()->json([
                'message' => "Pertanyaan berhasil ditambahkan"
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
        $pertanyaan = Pertanyaan::find($id);
        if (!$pertanyaan){
            return response()->json([
                'message' => 'pertanyaan Tidak ditemukan'
            ],404);
        }return response() ->json([
            'pertanyaan' => $pertanyaan
        ]);
    }

    public function update(Request $request, $id){
        try{
            //menemukan pertanyaan
            $pertanyaan = Pertanyaan::find($id);
            if(!$pertanyaan){
                return response()->json([
                    'message' => 'pertanyaan tidak ditemukan'
                ],404);
            }

            $pertanyaan->judul = $request->judul;
            $pertanyaan->jawaban= $request->jawaban;

            
            //update pertanyaan
            $pertanyaan->save();

            //respon json
            return response()->json([
                'message' => 'Pertanyaan berhasil diupdate'
            ],200);

        }catch(\Exception $e){
            return response()->json([
                'message' => "Something went really wrong"
            ]);
        }
    }
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        if(!$pertanyaan) {
            return response()->json([
                'message' => "Pertanyaan tidak Ditemukan"
            ],404);
        }

        

        //delete barang
        $pertanyaan->delete();

        return response()->json([
            'message' => "pertanyaan berhasil di hapus"
        ]);
    }


    public function indexPertanyaan()
    {
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.index_backend', compact('pertanyaan'));
    }

    public function detailPertanyaan($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.detail_pertanyaan',compact('pertanyaan'));
    }
    public function formUbahBAckend($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.formubah_pertanyaan',compact('pertanyaan'));
    }
    public function ubahBackend(Request $request,$id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->judul = $request->judul;
        $pertanyaan->jawaban= $request->jawaban;
        $pertanyaan->save();
        return redirect()->route('admin.pertanyaan.detail',['id'=>$pertanyaan->id]);
    }

    public function hapusBackend($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect()->route('admin.pertanyaan');
    }

    public function formTambahBackend()
    {
        return view('pertanyaan.form_tambah_pertanyaan');
    }

    public function tambahBackend(Request $request)
    {
        
        $pertanyaan = new Pertanyaan();
        $pertanyaan->judul = $request->judul;
        $pertanyaan->jawaban = $request->jawaban;
        $pertanyaan->save();
        return redirect()->route('admin.pertanyaan');
    }
}
