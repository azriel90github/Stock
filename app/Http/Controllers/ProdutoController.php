<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {

        $html= '<h1>Listagem de produtos com Laravel</h1>';

        $html .= '<ul>';

        $produtos = DB::select('select * from produtos');

        foreach ($produtos as $p) {
            $html .= '<li> Nome: '. $p->prod_nome .', Descrição: '. $p->prod_descricao .'</li>';
        }

        $html .= '</ul>';

        return $html;
            
    }
}
