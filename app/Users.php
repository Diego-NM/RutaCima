<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Table Name
    public $table = 'usuario'; 
    // Primary Key
    public $primaryKey = 'ID_Usuario';
}
