<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelKategory;
use Illuminate\Support\Facades\DB;

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
     public function search(Request $request)
    {
        $query = $request->input('cari');
        $hasil = modelKategory::where('nama_kategory', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('category.result', compact('hasil', 'query'));
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
            'tanggal_input_data' => $request->tanggal_input_data,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
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
         $kategori = DB::table('kategory')->where('id',$id)->get();
        return view('dashboard.edit',['kategory' => $kategory]);
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
          DB::table('kategory')->where('id',$request->id)->update([
            'nama_kategory' => $request->nama_kategory,
            'remarks' => $request->remarks
            
            ]);
            return redirect('/kategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('kategory')->where('id',$id)->delete();
        return redirect('/kategory');
    }
   

}

