<?php

namespace App\Http\Controllers\pay;

use App\Http\Controllers\Controller;
use App\Models\Payway;
use Illuminate\Http\Request;
use App\Service\Btcpay;
use BTCPayServer\client\webhook;

class BitcoinContorller extends Controller
{

    private Btcpay $btcpay;

    public function __construct()
    {

        $this->btcpay = app('App\Service\Btcpay');
    }

    public function notifyUrl(Request $request)
    {


        $raw_post_data = file_get_contents('php://input');
        $log = fopen("bit.log", 'ab');
        $date = date('m/d/Y h:i:s a');

        if (!$raw_post_data) {

            fwrite(
                $log,
                $date
            );
            fclose($log);
            return 'fail';
        };

        $data = json_decode($raw_post_data, true);
        if (!$data) {

            fwrite(
                $log,
                $date,
                $data
            );
            fclose($log);

            return 'fail';
        }


        $invoiceId = $data['invoiceId'];

        try {

            $secret = "LEuUHWJp99zBYTiNNA4ea7dt1oy";

            $invoice = $this->btcpay->GetInvoice($invoiceId);

            $price = $invoice['amount']; //获取价格

            $status =$invoice['status'];// 获取状态

            $orderId = $invoice['metadata']['orderId']; //获取orderId 



        } catch (\Throwable $e) {
            fwrite($log, $date . "Error: " . $e->getMessage() . '\n');
            fclose($log);
            throw $e;
        }

         //验证签名
    $headers =  getallheaders();

    $sig = $headers['Btcpay-Sig'];

    if ($sig !== "sha256=" . hash_hmac('sha256', $raw_post_data, $secret)) {
        
        fwrite($log,$date."Error签名错误");
        fclose($log);

         return 'fail'; //合法数据
     } else {

        //验证通过处理业务

         $this->orderProcessService->completedOrder($orderId, $price);
         return 'success';
     }
    }

   

    
}
