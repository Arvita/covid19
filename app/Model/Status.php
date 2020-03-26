<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  protected $table="status";
  protected $primaryKey = 'id';
  protected $fillable = [
      'id','status'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  
}
