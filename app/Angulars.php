<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angulars extends Model
{
    protected $table = 'angulars';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
}
