<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function all($columns = ['*'])
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling'],
            ['id' => 2, 'name' => 'George R.R. Martin'],
            ['id' => 3, 'name' => 'J.R.R. Tolkien'],
            ['id' => 4, 'name' => 'Stephen King'],
            ['id' => 5, 'name' => 'Agatha Christie'],
        ];
    }
}
