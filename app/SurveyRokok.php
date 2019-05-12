<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyRokok extends Model
{
    protected $fillable = [
        'jenis', 'alasan', 'merekBeli', 'merekKompetitor', 'merekTukar'
    ];
}
