<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Centreurgence extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'idp',
        'idm',
        'accepte',
        'nomurgence',
        'updated_at',
        'created_at',
        'idu',
        'idtype'
    ];

   
    
    public function patient()
{
    return $this->belongsTo(Patient::class, 'idp', 'id_p');
}

    

}



