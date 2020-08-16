<?php

namespace App\Listeners;

use App\Events\EventEmailUpdateProduto;
use App\Mail\OrderUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ListenerEmailUpdateProduto
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventEmailUpdateProduto $event)
    {
        $order = $event->getProduto();

        Mail::to($order->loja->email)->queue(new OrderUpdate($order));
    }
}
