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

        // create a new cURL resource
        $ch = curl_init();


        if ($lampadas->id == 1) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/1");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test1.ps1');
        } else if ($lampadas->id == 2) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/2");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test2.ps1');
        } else if ($lampadas->id == 3) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/3");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //            shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test3.ps1');
        } else if ($lampadas->id == 4) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/4");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //            shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test4.ps1');
        } else if ($lampadas->id == 5) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/5");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test_motor.ps1');
        }

        DB::table('lampadas')->where('id', $lampadas->id)->update(['status' => 'ON']);

        return redirect()->route('index');
    }

    public function desligarLampada($id)
    {
        $lampadas = Lampada::find($id);

        // create a new cURL resource
        $ch = curl_init();

        if ($lampadas->id == 1) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/1");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //            shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test1_off.ps1');
        } else if ($lampadas->id == 2) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/2");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //            shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test2_off.ps1');
        } else if ($lampadas->id == 3) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/3");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //            shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test3_off.ps1');
        } else if ($lampadas->id == 4) {
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/4");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //            shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test4_off.ps1');
        } else if ($lampadas->id == 5) {

            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, "http://192.168.40.137/5");
            curl_setopt($ch, CURLOPT_HEADER, 0);
    
            // grab URL and pass it to the browser
            curl_exec($ch);

            // close cURL resource, and free up system resources
            //curl_close($ch);

            //shell_exec('powershell -command C:\Users\lucas\Documents\Projects\Laravel\Arduino-PHP\public\powershell\test_motor_off.ps1');
        }
        DB::table('lampadas')->where('id', $lampadas->id)->update(['status' => 'OFF']);

        return redirect()->route('index');
    }
}
