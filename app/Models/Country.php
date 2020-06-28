<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = '_z_country';

    public $timestamps = false;

    protected $guarded = ['id'];
}
