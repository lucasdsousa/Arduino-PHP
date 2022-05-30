<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lampada;

class ArduinoController extends Controller
{
    public function index()
    {
        $lampadas = DB::table('lampadas')->get();

        return view('index', compact('lampadas'));
    }

    public function ligarLampada($id)
    {
        $lampadas = Lampada::find($id);  
        //$param = $lampadas->pin;
        
        //shell_exec('powershell -command C:/Users/Buchecha/Desktop/test.ps1' . $param);

        DB::table('lampadas')->where('id', $lampadas->id)->update(['status' => 'ON']);
        
        return redirect()->route('index');
    }

    public function desligarLampada($id)
    {
        $lampadas = Lampada::find($id);
        DB::table('lampadas')->where('id', $lampadas->id)->update(['status' => 'OFF']);
        
        return redirect()->route('index');
    }
}
