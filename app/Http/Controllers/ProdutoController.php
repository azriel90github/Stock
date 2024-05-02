<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listagem() {



        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos', $produtos);
        ;
            
    }
}
