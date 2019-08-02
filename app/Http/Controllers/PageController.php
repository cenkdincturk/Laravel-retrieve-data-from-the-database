<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\kitaplar;
use Validator;
class PageController extends Controller
{
    public function getIndex() {
        $kitaplar=kitaplar::all();
        return view("index",compact("kitaplar"));
    }
    public function postkaydet(Request $request) {

        $kontrol = Validator::make($request->all(), array(
            "kitapadi" => "required|min:4",
            "kitapturu" => "required",
            "kitapsayfa" => "numeric"
        ));
        if($kontrol->fails()) {
            return redirect()->to("/")->withErrors($kontrol)->withInput();
        }else {
            $kitapadi = $request->input("kitapadi");
            $kitapturu = $request->input("kitapturu");
            $kitapsayfa = $request->input("kitapsayfa");

            $kaydet = kitaplar::create(array(
                "kitap_adi" => $kitapadi,
                "kitap_turu" => $kitapturu,
                "kitap_sayfa" => $kitapsayfa
            ));
            if ($kaydet) {
                return redirect()->route("index");
            }

        }
    }
}
