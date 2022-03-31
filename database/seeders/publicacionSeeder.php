<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temasc1 = [ 'Administracion de empresas ', 'Mercadotecnia', 'Contabilidad'];
        $contenidoedit =[
            //primer curso
            "
             <h3><p>Estudio de prospectiva.</p>
               <p>Lenguaje corporal.</p>
               <p>Normas de información financiera.</p></h3>
               <p>Análisis bursátil, técnico y fundamental.</p></h3>
               <p>Planeación estratégica.</p></h3>
               <p>ERP y CRM.</p></h3>",

               //segundo curso
               "<h3><p>Gestión de talento humano.</p>
               <p>Manejo de inventarios.</p>
               <p> Comunicación oral y escrita.</p></h3>
               <p>Gestión de la producción.</p></h3>
               <p>Inteligencia de negocios.</p></h3>
               <p>Habilidades directivas.</p></h3>",

               //tercer curso
               "<h3><p>Normas de Información Financiera.</p>
               <p>Estados financieros.</p>
               <p>Constitución de sociedades.</p></h3>
               <p>Reexpresión de la Información Financiera.</p></h3>
               <p>Análisis de la información financiera.</p></h3>
               <p>Costos.</p></h3>",
        ];
        //insertar publicaciones
        for($i=0;$i<3;$i++)
        {
            DB::table('publicaciones')->insert([
                'nombre' => $temasc1[$i],
                'contenido' => $contenidoedit[$i],
            ]);
        }
    }
}
