<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;

    protected $table = 'Users';

    protected $casts = [
      'created_at',
      'updated_at',
    ];

    protected $fillable = [
        'name',
    ];

    function data(){

        return $this->hasOne(Data::class);
    }

    function setName($var){

        return $this->attributes['name'] = ucfirst($var);
    }
}
