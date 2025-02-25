<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;

//    protected $table = 'products';
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
