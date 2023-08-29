<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);
        
        $whereBBB = Test::where('text', '=', 'bbb');

        dd($values, $count, $first, $whereBBB);

        return view('tests.test', compact('values'));
    }
}
