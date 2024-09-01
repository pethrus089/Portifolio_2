<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAcesso extends Model
{
    protected $fillable = ['hosts', 'rota', 'dispositivo','log'];
}
