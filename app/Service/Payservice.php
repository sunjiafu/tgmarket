<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use App\Models\Paylist;
use App\Models\User;

class Payservice extends Controller
{


    public function completedPay($orderid,$amount)
    {

        //通过订单号获取用户ID 
        $order =  Paylist::query()->where('orderid', $orderid) ->first();

        //获取用户信息

        $user = User::find($order->userid);


        //给用户充值


         $user->depositFloat($amount);

   
    }
}
