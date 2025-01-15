<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myfunction(Request $req, $number = null)
    {
        $data = [];
        $data['number'] = $number ?? $req->input('number');
        if (empty($data['number'])) {
            $data['result'] = null;
        } elseif (!is_numeric($data['number'])) {
            $data['error'] = "กรุณาป้อนตัวเลขที่ถูกต้อง";
        } else {
            $data['result'] = [];
            for ($i = 1; $i <= 12; $i++) {
                $data['result'][] = $data['number'] . ' x ' . $i . ' = ' . ($data['number'] * $i);
            }
        }
        return view('myview', $data);
    }
}
