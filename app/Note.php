<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['note']; //Permite que la propiedad note de la tabla notes pueda ser editable.
    // Si no la defino me puede dar un error de massiveAsigment o simplemtente dejar el campo en blanco.
    // Permite que la pripiedad note pueda ser cargada como un array a traves de metodos Note::create
    // Esta propiedad me permite asignar un valor al campo note al momento de insertar un registro.

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
