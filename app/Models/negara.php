<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class negara extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id';

    protected $primaryKey = 'no';
    protected $guarded = ['no'];
    public $timestamps = false;

}
