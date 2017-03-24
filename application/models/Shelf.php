<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Shelf extends Eloquent
{
    protected $fillable = [
        'name'
    ];

    public function toArray()
    {
        return parent::toArray();
    }

    public function books() {
        return $this->belongsToMany(Shelf::class);
    }

}