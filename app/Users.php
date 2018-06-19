<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Table Name
    protected $table = 'usuario';
    // Primary Key
    public $primaryKey = 'ID_Usuario';
}
