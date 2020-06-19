<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model
{
    protected $table = 'divisions';
    protected $fillable = ['division_name'];
}
