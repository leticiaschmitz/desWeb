<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run()
    {
    DB::insert('insert into produtos
    (nome, quantidade, valor, descricao)
    values (?,?,?,?)',
    array('Geladeira', 2, 590,
    'Side by Side com gelo na porta'));
    DB::insert('insert into produtos
    (nome, quantidade, valor, descricao)
    values (?,?,?,?)',
    array('Fogão', 5, 950,
    'Painel automático e forno elétrico'));
    DB::insert('insert into produtos
    (nome, quantidade, valor, descricao)
    values (?,?,?,?)',
    array('Microondas', 1, 152,
    'Manda SMS quando termina de esquentar'));
    }
}