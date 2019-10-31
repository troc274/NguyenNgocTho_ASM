<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Take extends Model
{
    protected $fillable = ['id','name', 'image', 'location', 'description', 'amount'];
    public function price() {
        return number_format($this->amount, 0, '.','.');
    }
}
