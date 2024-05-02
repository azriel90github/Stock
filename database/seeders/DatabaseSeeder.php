<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     */
    public function run(): void
    {
        // User::factory(10)->create();
    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     */
    public function run(): void
    {
        DB::insert('insert into produtos (prod_nome, prod_valor, prod_descricao, prod_quantidade) values (?,?,?,?)',
        array('Geladaria', 5900.00, 'Side by Side com gelo na porta', 2));

        DB::insert('insert into produtos (prod_nome, prod_valor, prod_descricao, prod_quantidade) values (?,?,?,?)',
        array('Fogão', 950.00, 'Painel automático e forno elétrico', 5));

        DB::insert('insert into produtos (prod_nome, prod_valor, prod_descricao, prod_quantidade) values (?,?,?,?)',
        array('Microondas', 1520.00, 'Manda SMS quando termina de esquentar', 1));
    }
}
