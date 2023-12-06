<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biblioteca;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Biblioteca::create(['titulo'=>'Como Eu Era Antes de Você','autor'=>'teste','sinopse'=>'De origem modesta e sem grandes aspirações, a peculiar Louisa Clark é contratada para ser cuidadora de Will, um jovem tetraplégico depressivo e cínico.', 'genero'=> 'romance']);
        Biblioteca::create(['titulo'=>'Dom Casmurro','autor'=>'Machado de Assis','sinopse'=>'Dom Casmurro é um romance escrito por Machado de Assis, publicado em 1899 pela Livraria Garnier. Escrito para publicação em livro, o que ocorreu em 1900', 'genero'=> 'romance']);
        Biblioteca::create(['titulo'=>'Assim que Acaba','autor'=>'Collen Hoover','sinopse'=>'Considerado o livro do ano, que virou febre no TikTok e sozinho já acumulou mais de um milhão de exemplares vendidos no Brasil.', 'genero'=> 'romance']);
    }
}
