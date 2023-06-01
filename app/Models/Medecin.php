<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_me',
        'cin',
        'nom',
        'mdp',
        'email',
        'tel',
        'specialite'
    ];
}
