<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionAuthor extends Model
{
    use HasFactory;
    protected $fillable = [
        'submission_id', 'name', 'email', 'orcid', 'is_primary_contact'
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
