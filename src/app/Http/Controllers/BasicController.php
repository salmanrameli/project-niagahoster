<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home() {
        $harga_1 = Harga::findOrFail(1);
        $harga_2 = Harga::findOrFail(2);
        $harga_3 = Harga::findOrFail(3);
        $harga_4 = Harga::findOrFail(4);

        $promo_1 = explode('.', $harga_1->harga_promo);
        $promo_2 = explode('.', $harga_2->harga_promo);
        $promo_3 = explode('.', $harga_3->harga_promo);
        $promo_4 = explode('.', $harga_4->harga_promo);

        return view('welcome')->with([
            'harga_1' => $harga_1,
            'harga_2' => $harga_2,
            'harga_3' => $harga_3,
            'harga_4' => $harga_4,
            'promo_1' => $promo_1,
            'promo_2' => $promo_2,
            'promo_3' => $promo_3,
            'promo_4' => $promo_4
        ]);
    }
}
