<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Color extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'colors';
    protected $guarded = false;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
