<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id_kategori','name','price','descriptions','stock'];

    public function kategori()
    {
        return $this->BelongsTo(kategori::class,'id_kategori','id');
    }

}