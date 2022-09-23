<?php

namespace App\Http\Controllers\pay;

use App\Http\Controllers\Controller;
use App\Models\Payway;
use Illuminate\Http\Request;
use App\Service\Btcpay;

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

            $payid = $invoice['metadata']['orderId']; //获取orderId 



        } catch (\Throwable $e) {
            fwrite($log, $date . "Error: " . $e->getMessage() . '\n');
            fclose($log);
            throw $e;
        }
    }
}
