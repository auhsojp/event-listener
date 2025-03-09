<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderEmail implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(OrderPlaced $event)
    {
        Mail::raw('Your order has been placed!', function ($message) use ($event) {
            $message->to('inalealtia15@gmail.com')->subject('Order Confirmation');
        });
    }
}
