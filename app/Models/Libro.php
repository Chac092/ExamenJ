<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model{
    use HasFactory;
    protected $table = "Libros";
    protected $fillable = [
        'id',
        'Titulo',
        'Autor',
        'Isbn',
        'caratula'
    ];
    public function autores(){
        return $this->belongsTo(Autor::class, "autor", "id");
    }
}

