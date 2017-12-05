<?php

namespace App\Containers\Blog\Models;

use App\Ship\Parents\Models\Model;

class Blog extends Model
{
    protected $fillable = [
      'title', 'body', 'user_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'blogs';
}
