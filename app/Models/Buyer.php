<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table="buyers";
    protected $fillable=[

        'name','email','adress'
    ];


}
