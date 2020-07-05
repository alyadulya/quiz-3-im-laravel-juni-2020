<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('artikel.form');
    }

    public function store(Request $request)
    {
        /*
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'tag' => 'required',
            ]);
        
        $tag = explode(",", $request->tag);
        */
        
        $buat = ArtikelModel::save($request->all());
        //$buat->tag($tag);

        return redirect('/artikel');
    }

    public function show($id)
    {
        $detail = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('detail'));
    }

    public function edit($id)
    {
        $sunting = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('sunting'));
    }

    public function update($id, Request $request) {
        $sunting = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $hapus = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
    
?>