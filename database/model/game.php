<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $table='game';

    protected $fillable = [
        'age','name', 'game_urls','icon','background','type','description'
    ];
    protected $primaryKey='id';
    protected  $dates = ['updated_at','created_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function news()
    {
        return $this->hasMany('App\news', 'foreign_key', 'game_id');

    }}
