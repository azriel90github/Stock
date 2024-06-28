<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     */
    public function run(): void
    {


    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            [
                'prod_nome' => 'Geladaria',
                'prod_valor' => 5900.00,
                'prod_descricao' => 'Side by Side com gelo na porta',
                'prod_quantidade' => 2,
            ],
            [
                'prod_nome' => 'Fogão',1
                'prod_valor' => 950.00,
                'prod_descricao' => 'Painel automático e forno elétrico',
                'prod_quantidade' => 5,
            ],
            [
                'prod_nome' => 'Microondas',
                'prod_valor' => 1520.00,
                'prod_descricao' => 'Manda SMS quando termina de esquentar',
                'prod_quantidade' => 1,
            ],
        ]);
    }
}
