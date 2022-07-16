<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offer";
    protected $fillable = ['product','qtd','address_start','address_end'];
}
