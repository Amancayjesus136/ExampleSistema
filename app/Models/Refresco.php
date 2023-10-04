<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refresco extends Model
{
    use HasFactory;
    protected $table      =   'refresco';
    protected $primaryKey =   'idRefrescos';  

    protected $fillable = [
        'refrescos',
        'precio_refresco',
    ];
}
