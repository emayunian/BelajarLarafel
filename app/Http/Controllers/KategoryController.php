<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelKategory;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategory = modelKategory::all();
        return view('category.index',compact('kategory'));
    }
    
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //insert data ke teble film
        DB::table('kategory')->insert([
            'nama_kategory' => $request->nama_kategory,
            'slug' => $request->slug,
            'tanggal_input_data' => $request->tanggal_input_data
        ]);
        //alihkan halaman ke halaman film
        return redirect('/kategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tambah()
    {
        //memanggil view tambah
        return view('tambah');
    }
    public function search(Request $request){
        $cari = $request->get('search');
        $kategorys = Kategory::where('id','LIKE','%'.$cari.'%')->paginate(10);
        return view('kategory.index',compact('kategorys'));
    }
}

