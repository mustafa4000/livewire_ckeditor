<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function show($id)
    {
        return view('article', [
            'article' => Artikel::findOrFail($id)
        ]);
    }
}
