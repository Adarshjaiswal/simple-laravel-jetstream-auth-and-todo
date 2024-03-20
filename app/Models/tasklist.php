<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasklist extends Model
{
    use HasFactory;
    protected $table = 'tasklists';
    protected $fillable = [
        'title',
        'is_completed',
        'user_id'
    ];
}
