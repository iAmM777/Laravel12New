<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';
    protected $guarded = [];

    /**
     * Tasks that belong to this activity.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
