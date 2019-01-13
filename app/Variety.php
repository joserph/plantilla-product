<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    protected $table = 'varieties';

    protected $fillable = [
    	'variety',
        'color',
        'type'];
}
