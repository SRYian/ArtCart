<?php

namespace App\Http\Controllers;

use App\Core\Models\Cart\Cart;
use App\Core\Models\Cart\CartId;
use App\Core\Models\CartDetails\CartDetails;
use App\Core\Models\CartDetails\CartDetailsId;
use App\Core\Models\Order\Order;
use App\Core\Models\Order\OrderId;
use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\UserId;
use App\Core\Repository\OrderRepositoryInterface;
use Ramsey\Uuid\Uuid;

class OrderController extends Controller
{
    public function __construct(private OrderRepositoryInterface $orderRepository)
    {
    }
    public function SellerViewAll()
    {
        // return these params

        $orderArray = array((object)array('name' => 'THE BOI', 'price' => '10000', 'qty' => '1', 'status' => Order::SELESAI), (object)array('name' => 'THE GUY', 'price' => '10', 'qty' => '10', 'status' => Order::PENGIRIMAN));
        // TODO:change to command or something
        return view('seller.order', [
            'orders' => $orderArray,
        ]);
    }
    public function BuyerViewAll()
    {
        // $orderArray = array((object)array('name' => 'THE BOI', 'price' => '10000', 'qty' => '1', 'status' => Order::SELESAI), (object)array('name' => 'THE GUY', 'price' => '10', 'qty' => '10', 'status' => Order::PENGIRIMAN));
        $userId = '3cdab866-1015-11ee-be56-0242ac120002';
        $orderArray = $this->orderRepository->show(new UserId($userId));
        $finaltotal = $orderArray[0]->final_total ?? null;
        // TODO:change to command or something
        return view('order.main', [
            'orders' => $orderArray,
            'total' => $finaltotal
        ]);
    }
}
