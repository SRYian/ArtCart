<?php

namespace App\Http\Controllers;

use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use Ramsey\Uuid\Uuid;

class CartController extends Controller
{
    public function ViewAll()
    {
        // return these params
        $orderArray = array((object)array('name' => 'THE BOI', 'price' => '10000', 'qty' => '1', 'status' => 'AVAILABLE'), (object)array('name' => 'THE BOI', 'price' => '10000', 'qty' => '1', 'status' => 'AVAILABLE'));

        $productArray = array(new Product(new ProductId(Uuid::uuid4()), 'a', 23, 11, 2, 'addxcyv', '$product->photourl'), new Product(new ProductId(Uuid::uuid4()), '你好同学们', 23, 11, 2, 'addxcyv', '$product->photourl'));

        return view('cart.main', [
            'orders' => $orderArray,
            'itemcount' => count($orderArray),
            'total' => 1790000,
        ]);
    }
    public function UseCoupon()
    {
    }
}
