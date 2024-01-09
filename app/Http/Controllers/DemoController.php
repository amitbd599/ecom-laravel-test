<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //

    public function DemoAction()
    {
        $product = DB::table('products')->get();

        return $product;
    }
}
