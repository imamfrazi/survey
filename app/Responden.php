<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    protected $fillable = [
        'nama', 'nope', 'email', 'profesi', 'hobi'
    ];
}
