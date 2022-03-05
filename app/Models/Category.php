<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'hashtag', 'custom', 'icon'
    ];

    public function messages()
    {
        return $this->hasMany(Messages::class);
    }
}
