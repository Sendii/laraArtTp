<?php

namespace App\Http\Controllers;
use App\Artikel as Art;
use Auth;
use Illuminate\Http\Request;

class ArtikellController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function addArtikel() {
    	return view('artikel.add');
    }

    public function saveArtikel(Request $r) {
    	$new = new Art;
    	$akun = Auth::user()->id;

    	$new->users_id = $akun;
    	$new->judul = $r->input('judulartikel');
    	$new->isi = $r->input('isiartikel');
    	$new->foto = $r->input('gambar');

    	$new->save();
    	return redirect(url('art'));
    }

    public function allArtikel() {
    	$art['arts'] = Art::all();

    	return view('artikel.index', $art);
    }
}
