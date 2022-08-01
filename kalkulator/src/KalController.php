<?php

namespace Hakimpra\Kalkulator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class KalController extends Controller
{
     //..
     public function Tambah($a, $b){
    	$hasil = $a + $b;
        return view('kalkulator::hasil', compact('hasil'));
    }

    public function Kurang($a, $b){
    	$hasil = $a - $b;
        return view('kalkulator::hasil', compact('hasil'));
    }

    public function Kali($a, $b){
    	$hasil = $a * $b;
        return view('kalkulator::hasil', compact('hasil'));
    }

    public function Bagi($a, $b){
    	$hasil = $a / $b;
        return view('kalkulator::hasil', compact('hasil'));
    }
}
