<?php

namespace App\Http\Controllers\pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BtcController extends Controller
{
    public function notifyUrl(Request $request){


        $raw_post_data = $request->all();
        $log = fopen("bit.log",'ab');
        $date = date('m/d/Y h:i:s a');
      
        if(!$raw_post_data){

            return 'fail';
        };

        $data = json_decode($raw_post_data, true);

        if (!$data) {

            return 'fail';
        }


    }
}
