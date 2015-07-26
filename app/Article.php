<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at'
    ];

    protected $dates = [
        'published_at'
    ];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value);
     
        if( ! $this->slug)
        {
            $this->attributes['slug'] = Str::slug($value);
        }
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
