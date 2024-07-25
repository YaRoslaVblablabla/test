<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subitem;

class Item extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function subitems(){
        return $this->hasMany(Subitem::class);
    }
}
