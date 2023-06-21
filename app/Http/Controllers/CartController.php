<?php

namespace App\Http\Controllers;

use App\Application\Command\AddCart\AddCartCommand;
use App\Application\Command\AddCart\AddCartRequest;
use App\Application\Query\Buyer\BuyerAccountQueryInterface;
use App\Core\Models\Cart\CartId;
use App\Core\Models\Product\Product;
use App\Core\Models\Product\ProductId;
use App\Core\Models\User\UserId;
use App\Core\Repository\CartDetailsRepositoryInterface;
use App\Core\Repository\CartRepositoryInterface;
use App\Core\Repository\CouponRepositoryInterface;
use App\Core\Repository\ProductRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CartController extends Controller
{
    private UserId $userId;
    public function __construct(
        private BuyerAccountQueryInterface $buyerAccountQuery,
        private CartRepositoryInterface $cartRepository,
        private CartDetailsRepositoryInterface $cartDetailsRepository,
        private ProductRepositoryInterface $productRepository,
//        private CouponRepositoryInterface $couponRepository,
    ){
        $this->userId = new UserId("84560eec-1058-11ee-8b95-8030493bdf32");
    }

    public function index()
    {
//        $userId = new UserId("84560eec-1058-11ee-8b95-8030493bdf32");
        $buyerAccount = $this->buyerAccountQuery->execute($this->userId);
        $cartId = new CartId($buyerAccount->curr_cart_id);

        $cart = $this->cartRepository->byId($cartId);
        $cartDetails = $this->cartDetailsRepository->byCartId($cartId);



        return view('cart.main', [
            'cart' => $cart,
            'cartDetails' => $cartDetails
        ]);
    }

    public function add(Request $request, AddCartCommand $command)
    {

        $productId = $request->input('product_id');
        $addRequest = new AddCartRequest($this->userId, $productId);
        try {
            $command->execute($addRequest);
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }
        return view('cart.main');
    }

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
