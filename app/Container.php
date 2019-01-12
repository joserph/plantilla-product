<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $table = 'containers';

    protected $fillable = [
    	'n_box',
        'pack',
        'type',
        'variety',
        'size',
        'stem_b',
        'bunches'];
}
