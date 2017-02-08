<?php


use App\Category;
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

        $categories = Category::all();

        $notes = factory(Note::class)->times(100)->make();

        foreach ($notes as $note){
//           $categories->random()->notes()->save($note);

            $category = $categories->random();


            $category->notes()->save($note);
            //La sentencia de arriba es lo mismo que:
            //$note->category_id = $category->id;
            //$note->save();

        }

//    	factory(Note::class)->times(100)->create();
    	//Times -> especifica la cantiad de notas que quiero crear.
    	//create -> crea tanto los modelos y los graba en la base de datos de una vez. Est recibe un arreglo de parámetros si deseo personalizar algunos de los atributos con los que voy a crear el modelo. Si no paso ninguno entonces los registros simplemente se crean de forma aleatoria.
    	//make -> crea los modelos sin grabarlose en la base de datos
        //random -> Selecciona un valor aleatorio de una colección de datos
        //hasMany contiene muchos metodos útiles. Y uno de ellos es el metodo save() el cual permite en este caso:
        // guardar cada una da las notas pero asociandolas a una categoría $category->notes()->save($note);

    }
}
