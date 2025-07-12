<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_type',
        'first_name',
        'last_name',
        'email',
        'phone',
        'subject',
        'message',
        'priority',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getSubjectLabelAttribute()
    {
        $subjects = [
            'admissions' => 'Admissions Inquiry',
            'academic' => 'Academic Information',
            'facilities' => 'Facilities & Campus',
            'extracurricular' => 'Extracurricular Activities',
            'fees' => 'Fees & Financial Aid',
            'transport' => 'Transportation',
            'complaint' => 'Complaint/Concern',
            'suggestion' => 'Suggestion',
            'other' => 'Other'
        ];

        return $subjects[$this->subject] ?? $this->subject;
    }

    public function getPriorityColorAttribute()
    {
        $colors = [
            'low' => 'success',
            'medium' => 'warning',
            'high' => 'danger'
        ];

        return $colors[$this->priority] ?? 'secondary';
    }

    public function getStatusColorAttribute()
    {
        $colors = [
            'pending' => 'warning',
            'resolved' => 'success'
        ];

        return $colors[$this->status] ?? 'secondary';
    }
}