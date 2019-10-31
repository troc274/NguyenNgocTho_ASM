<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo("App\Category");
    }

    public function color() {
        return $this->belongsTo("App\Color");
    }

    public function photos() {
        return $this->hasMany("App\Photo");
    }

    public function price() {
        return number_format($this->amount, 0, '.','.');
    }
}
