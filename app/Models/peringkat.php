<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class peringkat extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id';
    protected $fillable = [
        'negara_peringkat',
        'alternative',
        'score',
    ];

    public $timestamps = false;

}
