<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absence extends Model
{
    use HasFactory;

    protected $table = 'absences';
    protected $fillable = ['dates', 'is_approved', 'desc', 'employee_id', 'approver_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = [
        'dates' => 'array',
    ];
    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
