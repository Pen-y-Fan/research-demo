<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * @var array of guarded fields
     */
    protected $guarded = ['id'];
}
