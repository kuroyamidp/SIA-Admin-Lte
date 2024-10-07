<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "forms";
    protected $fillable = [
        'uid',
        'kode_form',
        'abc',
    ];
}
