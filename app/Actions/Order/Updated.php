<?php

namespace App\Actions\Order;

use App\Actions\BaseAction;

/**
 * @property string merchant example 674390266
 * @property string created_at example "2021-06-02 22:17:06"
 * @property string event example "order.updated"
 * @property array data @see https://docs.salla.dev/docs/merchent/openapi.json/components/schemas/OrdersWebhookResponse
 */
class Updated extends BaseAction
{
    public function handle()
    {
        // you can do whatever you want
    }
}
