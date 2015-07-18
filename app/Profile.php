<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [];

    public $timestamps = false;

    protected $dates = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
