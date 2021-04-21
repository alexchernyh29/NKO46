<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'project';
    protected $fillable = [
        'title',
        'message',
        'link',
    ];
}
