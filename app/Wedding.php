<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $fillable  =['wife_id','husband_id','time','location','banner'];
    public function wife() {
        return $this->belongsTo('App\Wife');
    }
    public function husband() {
        return $this->belongsTo('App\Husband');
    }
}
