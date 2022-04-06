<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

use function DI\create;

class SeriesController extends Controller
{

    public function index(Request $request)
    {

        $series = Serie::query()->orderBy('nome')->get(); 
        //var_dump($serie);

        /*
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];
        */
        /*$html = "<ul>";
        
        foreach ($series as $serie){
            $html .="<li>$serie</li>";
        }
        $html .= "</ul>";*/

        //função 'compact' funciona pegando uma variável e transformando ela em um array com valor - onde possui o mesmo nome.
        /* Substituindo uma digitação da forma abaixo:
        ['series' => $series]
        */
        return view('series.index', compact('series'));
        
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        
        /* Pode ser utilizado dessa forma ou como descrita mais abaixo
        $nome = $request->nome;
        $serie = New Serie();
        $serie->nome = $nome;
        $serie->save();
        */
        
        /*$nome = $request->nome;
        Serie::create([
            'nome'=> $nome
        ]);
        */

        $serie = Serie::create($request->all());

        return redirect('/series');

    }

}