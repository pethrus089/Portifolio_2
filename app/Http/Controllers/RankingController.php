<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogAcesso;

class RankingController extends Controller
{
    public function index()
    {
        $contAcesso = LogAcesso::all()->count();
        $contVisitantes = LogAcesso::distinct('hosts')->count();
        $contAcessRotas = LogAcesso::selectRaw('rota, count(rota) as count')
        ->groupBy('rota')
        ->get()
        ->map(
            function($item)
            {
                return [
                    'rota' => $item->rota ,
                    'contRota' => $item->count ,
                ];
            }
        );

        $contAcessRotas = $contAcessRotas->toArray();

        $param = [
            'contAcesso' => $contAcesso,
            'contVisitantes' => $contVisitantes,
            'contAcessRotas' => $contAcessRotas,
        ];

        return view('ranking/index', ['param' => $param]);
    }
}
