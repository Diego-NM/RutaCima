<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  //Table Name
  public $table = 'reservacion';
  // Primary Key
  public $primaryKey = 'ID_Reservacion';
}
