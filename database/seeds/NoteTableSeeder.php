<?php

use App\Note;
use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// for ($i=1; $i <= 100 ; $i++) { 
    	// 	Note::create(['note' => "Note $i"]);
    	// }
    	
    	factory(Note::class)->times(100)->create();
    	//Times -> especifica la cantiad de notas que quiero crear.
    	//create -> crea tanto los modelos y los graba en la base de datos de una vez. Est recibe un arreglo de parámetros si deseo personalizar algunos de los atributos con los que voy a crear el modelo. Si no paso ninguno entonces los registros simplemente se crean de forma aleatoria.
    	//make -> crea los modelos sin grabarlose en la base de datos
    }
}
