<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::create(['title'=>'Fazer lição de LP4','description'=>'nunca esquecer de ligar o xampp','completed'=>true]);
        Task::create(['title'=>'Revisar anotações','description'=>'fazer um resumo','completed'=>false]);
        Task::create(['title'=>'Tomar banho porque tá calor','description'=>'Pegar sabonete, se lavar','completed'=>true]);
    }
}
