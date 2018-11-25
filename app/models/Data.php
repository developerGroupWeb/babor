<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = true;

    protected $table = 'Data';

    protected $casts = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'user_id',
        'user_name',
        'birth',
        'city',
        'gender',
        'email',
        'number',
        'password',
    ];

    function user(){

        return $this->belongsTo(User::class);
    }

    function getBirthFrAttribute(){

        return $this->birst->format('d/m/Y');
    }

    function setBirthDay($tab = []){

        $birth = '';

        if($tab != null){

            $birth = $tab[2];
            $birth .= '/'.$tab[1];
            $birth .= '/'.$tab[0];
        }
        return $birth;
    }

    function setName($var){

        return $this->attributes['user_name'] = ucfirst($var);
    }

    function hashPassword($var){

        return bcrypt($var);
    }
}
