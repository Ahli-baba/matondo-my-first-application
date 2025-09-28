<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Tell Laravel to use the job_listings table
    protected $table = 'job_listings';

    protected $fillable = ['employer_id', 'title', 'salary'];

    // A Job belongs to an Employer (User)
    public function employer()
    {
        return $this->belongsTo(\App\Models\User::class, 'employer_id');
    }

    // A Job can have many Tags
    public function tags()
    {
        return $this->belongsToMany(
            \App\Models\Tag::class,
            'job_listing_tag',   // ✅ pivot table name
            'job_listing_id',    // ✅ foreign key in pivot referencing jobs
            'tag_id'             // ✅ foreign key in pivot referencing tags
        );
    }
}
