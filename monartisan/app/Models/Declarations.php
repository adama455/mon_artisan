<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declarations extends Model
{
    use HasFactory;
    protected $table = 'declarations';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'assurance',
        'numero_police',
        'nom_complet',
        'email',
        'contact1',
        'contact2',
        'lieu',
        'date',
        'details'
        // autres attributs de l'étudiant
    ];
    
}
