<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {
        //$series = DB::select('select * from series');
        $series = Serie::All();
        //dd($series);

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
