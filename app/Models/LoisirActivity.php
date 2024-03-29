<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoisirActivity extends Model
{
    use HasFactory;

    protected $fillable = ['title','sub_title', 'short_description', 'long_description', 'image_path'];
}
