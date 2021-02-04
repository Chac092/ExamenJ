<?php

namespace Database\Seeders;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $Libro1=['hola y adios',1,'111111ABC','ferra.jpg'];
        $Libro2=['Adios y Hola',1,'2222222ABC','ironman2.jpg'];
        $Libro3=['pepe',2,'3333333ABC','ironman3.jpg'];
        $Libro4=['Buenas Noches',2,'444444ABC','ironman.png'];
        $arrayLibros=[$Libro1,$Libro2,$Libro3,$Libro4];
        foreach($arrayLibros as $Libro){
            $NuevoLibro = new Libro();
            $NuevoLibro->titulo=$Libro[0];
            $NuevoLibro->autor=$Libro[1];
            $NuevoLibro->isbn=$Libro[2];
            $NuevoLibro->caratula=$Libro[3];
            $NuevoLibro->save();
        }
    }
}
