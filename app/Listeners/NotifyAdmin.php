<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Support\Facades\Log;

class NotifyAdmin
{
    public function handle(OrderPlaced $event)
    {
        Log::info('New order placed: ' . $event->order->id);
    }
}
