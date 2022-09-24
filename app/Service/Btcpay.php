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
   public $apiKey;
   public $host;
   public $currency = 'USD';
   public $storeId;



   public function __construct()

   {

      $this->paygetway = Payway::find(1);

      $this->apiKey = $this->paygetway->key;

      $this->host = $this->paygetway->shanghukey;

      $this->storeId = $this->paygetway->shopid;
   }

   public  function CreateInvoice(?PreciseNumber $amount = null, ?string $orderId, string $buyerEmail)
   {

      //加载网关



      //构造订单信息

      $client = new Invoice($this->host, $this->apiKey);

      $metaData = [

         'itemDesc' => '用户充值',

     ];

      $checkoutOptions = new InvoiceCheckoutOptions();

      $checkoutOptions
         ->setRedirectURL('https://www.buyteglegram.com/order');

      $data =  $client->createInvoice(
         $this->storeId,
         $this->currency,
         PreciseNumber::parseString($amount),
         $orderId,
         $buyerEmail,
         $metaData,
         $checkoutOptions
      );




      return  $data;
   }

   public function GetInvoice($invoiceId)
   {

      $client = new  Invoice($this->host, $this->apiKey);

      $getinvoice = $client->getInvoice($this->storeId, $invoiceId);

      return $getinvoice;
   }
}
