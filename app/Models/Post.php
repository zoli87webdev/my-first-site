<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function getLength($post): int
    {
        return strlen($post);
    }
}
