<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    use \Conner\Tagging\Taggable;
    
    public static function get_all()
    {
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data)
    {
        unset($data["_token"]);
        $buat = DB::table('artikel')->insert($data);
        return $buat;
    }

    public static function find_by_id($id)
    {
        $detail = DB::table('artikel')->where('id', '=', $id)->first();
        return $detail;
    }

    public static function update($id, $request)
    {
        $sunting = DB::table('artikel')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request["judul"],
                        'isi' => $request["isi"],
                        'tag' => $request["tag"]
                    ]);
        return $sunting;
    }

    public static function destroy($id) {
        $hapus = DB::table('artikel')
                    ->where('id', $id)
                    ->delete();
        return $hapus;
    }
}

?>