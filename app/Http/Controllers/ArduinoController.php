<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArduinoController extends Controller
{
    public function index()
    {
        shell_exec('powershell -command C:/Users/Buchecha/Desktop/test.ps1');

        return view('test');
    }
}
