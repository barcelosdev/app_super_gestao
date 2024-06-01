<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $param_one, int $param_two)
    {
        // echo "A soma de $paramOne + $paramTwo é " . $paramOne + $paramTwo;

        // return view('site.test', [
        //     'param_one' => $param_one,
        //     'param_two' => $param_two
        // ]);

        // return view('site.test', compact('param_one', 'param_two'));

        return view('site.test')
            ->with('param_one', $param_one)
            ->with('param_two', $param_two);
    }
}
