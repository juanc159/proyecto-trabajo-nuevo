<?php

namespace Database\Seeders;

use App\Models\Sexo;
use App\Models\TipoDocumento;
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
        // \App\Models\User::factory(10)->create();

        //TipoDocumento::factory(10)->create();
        $TipoDocumento = new TipoDocumento();
        $TipoDocumento->nombreDocumento= 'Cedula Identidad';
        $TipoDocumento->save();


        $TipoDocumento2 = new TipoDocumento();
        $TipoDocumento2->nombreDocumento= 'registro civil';
        $TipoDocumento2->save();

       
        /*
        $sexo = new Sexo;
        $sexo->nombreSexo= 'Masculino';
        $sexo->save();

        $sexo2 = new Sexo;
        $sexo2->nombreSexo= 'Femenino';
        $sexo2->save();*/


    }
}
