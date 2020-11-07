<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TipoDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoDocumento = TipoDocumento::firstOrCreate(['tipo' => '01','nombre_largo'=>'D.N.I. o Libreta Electoral',
                                                    'nombre_corto' => 'D.N.I/L.E.', 'longitud'=>8]);
        $tipoDocumento = TipoDocumento::firstOrCreate(['tipo' => '04','nombre_largo'=>'Carnet de Extranjería',
                                                    'nombre_corto' => 'CARNET EXT.', 'longitud'=>12]);
        $tipoDocumento = TipoDocumento::firstOrCreate(['tipo' => '06','nombre_largo'=>'Régimen Unico del Contribuyente',
                                                    'nombre_corto' => 'R.U.C.', 'longitud'=>11]);
        $tipoDocumento = TipoDocumento::firstOrCreate(['tipo' => '07','nombre_largo'=>'PASAPORTE',
                                                    'nombre_corto' => 'PASAPORTE', 'longitud'=>12]);
        $tipoDocumento = TipoDocumento::firstOrCreate(['tipo' => '11','nombre_largo'=>'Partida de Nacimiento Identidad',
                                                    'nombre_corto' =>'P. NAC.', 'longitud'=>15]);
        $tipoDocumento = TipoDocumento::firstOrCreate(['tipo' => '00','nombre_largo'=>'OTROS',
                                                    'nombre_corto' => 'OTROS', 'longitud'=>15]);
    }
}
