<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request) {  
        $series = Serie::all();
        return view('series.index') -> with('series', $series);  # equivale a retornar o array ['series'=> $series]
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request) {
        $nome_serie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nome_serie;
        $serie->save();
        return redirect('series/');
    }

}
