<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NotesTest extends TestCase
{
    // use WithoutMiddleware;
    use DatabaseTransactions;
    
    public function test_notes_list()
    {
        // Note::truncate();
    	//Having (Teniendo dos notas)
    	Note::create(['note' => 'My first note']);
    	Note::create(['note' => 'second note']);
    	
    	//When (Cuando el usuario visite notes)
        $this->visit('notes')
        	//Then (Comprobaciones - Verifica mediante un patrón que existan los siguientes textos)
        	->see('My first note')
        	->see('Second note');
    }

    public function test_create_note()
    {
        $this->visit('notes') //Al visitar la página
            ->click('Add a note') //Al hacer click a un boton "Add a note"
            ->seePageIs('notes/create') //Si se visualiza la página 'notes/create'
            ->see('Create a note') //Si se visualiza un título 'Create a note'
            ->type('A new note', 'note') //Escribe en un campo de nombre 'note' el texto 'A new note'
            ->press('Create note') //Presiona un botón con el texto 'Create note'
            ->seePageIs('notes') //Verifica que la página cargada es notes
            ->see('A new note') //Verifica que se visualice el texto 'A new note'
            ->seeInDatabase('notes', [  
                    'note' => 'A new note'
                ]);  //Se debe encontrar en la base de datos, en la tabla 'notes', en el campo 'note', debe existir un registro con el valor 'A new note'

    }
}
