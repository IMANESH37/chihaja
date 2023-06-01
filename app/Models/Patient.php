<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_p';
    protected $fillable = [
        'id_p',
        'cin',
        'nom',
        'mdp',
        'email',
        'sex',
        'age',
        'tel',
        'img'
    ];
    public function centreurgence()
{
    return $this->hasOne(Centreurgence::class, 'idp', 'id_p');
}

    


    
}
