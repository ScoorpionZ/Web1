<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingatlan;

class IngatlanokController extends Controller
{
    public function index()
    {
        return Ingatlan::with('kategoria')->get();
    }
 

    public function store(Request $request)
    {
        return Ingatlan::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Ingatlan::find($id);
        $article->update($request->all());
        return $article;
    }

    public function delete($id)
    {
        $article = Ingatlan::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
