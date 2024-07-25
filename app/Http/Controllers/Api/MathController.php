<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function suma($num1, $num2)
    {
        $result = $num1 + $num2;
        return response()->json(['result' => $result]);
    }

    public function mult($num1, $num2)
    {
        $result = $num1 * $num2;
        return response()->json(['result' => $result]);
    }
}
