<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    protected $table = 'product';
    protected $fillable = [
        'name',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at' 
    ];
}
