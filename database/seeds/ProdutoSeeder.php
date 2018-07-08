<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['descricao' => 'Biscoito']);
        DB::table('produtos')->insert(['descricao' => 'Feijão']);
    }
}
