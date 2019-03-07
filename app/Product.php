<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $casts = [
        'published' => 'boolean',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'custom',
    ];

    public function getCustomAttribute()
    {
        return "awfatech developer";
    }

    /**
     * @param  $value
     * @return mixed
     */
    public function getCreatedAtAttribute($value)
    {
        return now()->parse($value)->diffForHumans();
    }

    /**
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
