<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semua_pertanyaan = Pertanyaan::orderby('id','DESC')->paginate(3); //orderby untuk menampilkan berdasarkan kehendak user
        //return $semua_pertanyaan;
        return view('pertanyaan/index', compact('semua_pertanyaan')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pertanyaan_baru = new Pertanyaan;
        $pertanyaan_baru->pertanyaan = $request->pertanyaan;

        $pertanyaan_baru->save();

        return redirect()
            ->to('/pertanyaan/create')
            ->with('pesan', 'Berhasil Menyimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $semua_jawaban = Jawaban::where('pertanyaan_id', $id)->get();

        return view('pertanyaan/show', compact('pertanyaan', 'semua_jawaban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        
        return view('pertanyaan/delete', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        return view('pertanyaan/edit', compact('pertanyaan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->save();
        return redirect("pertanyaan")
            ->with("pesan", "Berhasil mengedit pertanyaan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();

        return redirect()->to("/pertanyaan");
    }
}
