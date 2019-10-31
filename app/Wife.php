<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wife extends Model
{
    protected $fillable  =['name','image','birthday','location','description','time','map'];
    public function wedding() {
        return $this->hasOne('App\Wedding');
    }
    
}
