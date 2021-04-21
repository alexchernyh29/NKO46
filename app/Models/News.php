<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'news';
    protected $fillable = [
        'title',
        'message',
        'link',
    ];
}
