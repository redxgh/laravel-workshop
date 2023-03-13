<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class helloModel extends Model
{
    use HasFactory;
    public function getMsg()
    {
        $arr = array("apple","orange","ananas");
        return $arr;
    }
}
