<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Menu extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    
}
