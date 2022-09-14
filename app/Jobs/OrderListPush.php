<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Service\Api;
use App\Models\Orderlist;


class OrderListPush implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private Api $Api;

    public $order;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        //
        $this->Api = app('App\Service\Api');
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {


        $this->order->map(function ($item, $key) {

            $smmstatus = collect($this->Api->status($item->serviceid));

            if ($item->status != $smmstatus['status']) {

                Orderlist::query()->where('id', $item->id)->update(['status' => $smmstatus['status']]);
            }
        });
  
  
}
}