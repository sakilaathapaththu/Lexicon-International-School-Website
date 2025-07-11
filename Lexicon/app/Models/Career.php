<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Career extends Model
{
    protected $fillable = [
        'title', 'description', 'location', 'job_type',
        'email', 'contact_no', 'deadline', 'image', 'posted_by'
    ];



    public function admin()
    {
        return $this->belongsTo(Admin::class, 'posted_by');
    }
}