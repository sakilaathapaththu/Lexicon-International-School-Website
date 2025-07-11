<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Gallery extends Model
{
     protected $fillable = [
        'title', 'description', 'image_path', 'uploaded_by'
    ];

    public function uploader()
    {
        return $this->belongsTo(Admin::class, 'uploaded_by');
    }
}
