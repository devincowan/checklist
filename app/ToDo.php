<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'completed'
    ];

    protected $table = 'todos';

    public $timestamps = true;
}
