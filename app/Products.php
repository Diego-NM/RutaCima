<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  //Table Name
  public $table = 'producto';
  // Primary Key
  public $primaryKey = 'ID_Producto';
}
