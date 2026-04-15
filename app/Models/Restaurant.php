<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Restaurant extends Model
{
    protected $fillable =[
        'name',
        'address',
        'phone',
        'email',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
