<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;
use App\Models\Activity;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $guarded = [];

    /**
     * A task may belong to a user (optional).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A task belongs to a project.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * A task belongs to an activity.
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
