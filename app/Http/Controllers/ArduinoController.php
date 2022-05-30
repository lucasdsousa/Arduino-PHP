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


        if ($lampadas->id == 1) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test1.ps1');
        } else if ($lampadas->id == 2) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test2.ps1');
        } else if ($lampadas->id == 3) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test3.ps1');
        } else if ($lampadas->id == 4) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test4.ps1');
        } else if ($lampadas->id == 5) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test_motor.ps1');
        }

        DB::table('lampadas')->where('id', $lampadas->id)->update(['status' => 'ON']);

        return redirect()->route('index');
    }

    public function desligarLampada($id)
    {
        $lampadas = Lampada::find($id);

        if ($lampadas->id == 1) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test1_off.ps1');
        } else if ($lampadas->id == 2) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test2_off.ps1');
        } else if ($lampadas->id == 3) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test3_off.ps1');
        } else if ($lampadas->id == 4) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test4_off.ps1');
        } else if ($lampadas->id == 5) {
            shell_exec('powershell -command E:\Projects\Laravel\Arduino-PHP\public\powershell\test_motor_off.ps1');
        }
        DB::table('lampadas')->where('id', $lampadas->id)->update(['status' => 'OFF']);

        return redirect()->route('index');
    }
}
