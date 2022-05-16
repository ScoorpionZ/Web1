<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoria;

class KategoriakController extends Controller
{
    public function index()
    {
        $filmek= Kategoria::all();
        return $filmek;
    }
 

    public function store(Request $request)
    {
        $request->validate([
            'teremNev' => 'required',
            'sor' =>  'required',
            'oszlop' =>  'required']);
        return Kategoria::create($request->all());
    }

    

    public function delete($id)
    {
        $article = Kategoria::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
