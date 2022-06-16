<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'project_title',
        'work_description',
        'man_day',
        'requester',
        'progress_per',
        'remarks'
}
