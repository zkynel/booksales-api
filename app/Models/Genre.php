<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function all($columns = ['*'])
    {
        return [
            ['id' => 1, 'name' => 'Fantasy'],
            ['id' => 2, 'name' => 'Science Fiction'],
            ['id' => 3, 'name' => 'Romance'],
            ['id' => 4, 'name' => 'Horror'],
            ['id' => 5, 'name' => 'Mystery'],
        ];
    }
}
