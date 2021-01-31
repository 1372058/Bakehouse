<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at' 
    ];
}
