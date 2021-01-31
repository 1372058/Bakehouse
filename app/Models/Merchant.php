<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use SoftDeletes;

    protected $table = 'merchant';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at' 
    ];
}
