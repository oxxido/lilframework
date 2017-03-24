<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    protected $fillable = [
        'title',
        'description',
        'cover'
    ];

    public function toArray()
    {
        return parent::toArray();
    }

    public function shelves() {
        return $this->belongsToMany(Shelf::class);
    }

}
