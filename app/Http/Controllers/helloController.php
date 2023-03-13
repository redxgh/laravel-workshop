<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\helloModel;
class helloController extends Controller
{
    public function getPage()
    {
        $mod = new helloModel;
        $msg = $mod -> getMsg();
        return view('hello',['msg'=>$msg]);
    }
}
