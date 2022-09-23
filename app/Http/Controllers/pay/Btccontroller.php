<?php

namespace App\Http\Controllers\pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Btccontroller extends Controller
{
    public function notifyUrl(Request $request){


        $payload = file_get_contents( 'php://input' );


        return 'ok';




    }
}
