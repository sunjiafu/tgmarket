<?php

namespace App\Http\Controllers\pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BitcoinContorller extends Controller
{
    public function notifyUrl(Request $request){


        $raw_post_data = file_get_contents('php://input');
        $log = fopen("bit.log",'ab');
        $date = date('m/d/Y h:i:s a');
      
        if(!$raw_post_data){

        

            return 'fail';
 
        };

        fwrite($log.$date,$raw_post_data);
}
}