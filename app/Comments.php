<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
  //Table Name
  public $table = 'comunicacion';
  // Primary Key
  public $primaryKey = 'ID_Comunicacion';
}
