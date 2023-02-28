<?php

namespace Raad\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function add($a,$b)
    {
        echo $a+$b;
    }
}
