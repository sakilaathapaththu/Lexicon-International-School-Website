<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'published_at',
        'reading_time',
        'content',
        'featured_image',
        'tags',
        'author_id',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    public function getTagsListAttribute()
    {
        return explode(',', $this->tags);
    }
}
