<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';

    protected $fillable = [
        'description','summary', 'title'
    ];
    protected $primaryKey='id';
    protected  $dates = ['updated_at','created_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function game()
    {
        return $this->belongsTo('App\game');
    }
}




