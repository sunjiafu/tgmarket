<?php

namespace App\Service;


use App\Models\Payway;
use Illuminate\Http\Request;
use BTCPayServer\Client\Invoice;
use BTCPayServer\Client\InvoiceCheckoutOptions;
use BTCPayServer\Util\PreciseNumber;

class Btcpay
{

   private $paygetway;

   public function __construct()

   {

      $this->paygetway = Payway::find(1);
   }

   public  function CreateInvoice(?PreciseNumber $amount = null, ?string $orderId, string $buyerEmail)
   {

      //加载网关

      $apiKey = $this->paygetway->key;
      $host = $this->paygetway->shanghukey;
      $storeId = $this->paygetway->shopid;
      $currency = 'USD';

      $redirectURL = url('test');   //返回URL

      //构造订单信息

      $client = new Invoice($host, $apiKey);

      $data =  $client->createInvoice(
         $storeId,
         $currency,
         PreciseNumber::parseString($amount),
         $orderId,
         $buyerEmail
      );




      return  $data;
   }
}
