<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class envio extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_envio', 'fecha_entrega'];
    
    
}