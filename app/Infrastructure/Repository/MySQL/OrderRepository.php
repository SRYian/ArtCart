<?php

namespace App\Infrastructure\Repository\MySQL;

use App\Core\Models\Order\Order;
use App\Core\Models\Order\OrderId;
use Illuminate\Support\Facades\DB;

class OrderRepository implements \App\Core\Repository\OrderRepositoryInterface
{

    public function byId(OrderId $id): ?Order
    {
        // TODO: Implement byId() method.
        $row = DB::table('order')->where('order_id', $id->id())->first();
        if (!$row) return null;
        return new Order(new OrderId($row->order_id), $row->final_total, $row->shipment_fee, $row->origin, $row->destination, $row->status);
    }

    public function save(Order $order): void
    {
        // TODO: Implement save() method.
        $payload = $this->constructPayloadWithoutId($order);
        $payload['order_id'] = $order->getId();
        DB::table('order')->insert($payload);
    }

    public function show(): array
    {
        // TODO: Implement show() method.
        $row = DB::table('product')->select(['final_total', 'shipment_fee', 'origin', 'destination', 'status']);

        $orderList = array();

        foreach ($row as $order) {
            $orderList[] = new Order(new OrderId($order->order_id), $order->final_total, $order->shipment_fee, $order->origin, $order->destination, $order->status);
        }

        return $orderList;
    }

    public function update(Order $order): void
    {
        // TODO: Implement update() method.
        $payload = $this->constructPayloadWithoutId($order);
        $payload['order_id'] = $order->getId();
        DB::table('order')
            ->where('order_id', $order->getId())
            ->update($payload);
    }
    private function constructPayloadWithoutId(Order $order)
    {
        // might throw error
        return [
            "final_total" => $order->getFinalTotal(),
            "shipment_fee" => $order->getShipmentFee(),
            "origin" => $order->getOrigin(),
            "destination" => $order->getDestination(),
            "status" => $order->getStatus(),
        ];
    }
}
