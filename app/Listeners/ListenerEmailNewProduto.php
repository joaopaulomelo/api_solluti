<?php

namespace App\Listeners;

use App\Events\EventEmailNewProduto;
use App\Mail\OrderNew;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;

class ListenerEmailNewProduto
{
    use Queueable;

    /**
     *
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
    public function handle(EventEmailNewProduto $event)
    {
        $order = $event->getProduto();

        Mail::to(env('EMAIL_SEND'))->queue(new OrderNew($order));
    }
}
