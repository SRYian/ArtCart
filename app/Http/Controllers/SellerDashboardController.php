<?php

namespace App\Http\Controllers;

use App\Application\Query\Seller\SellerAccountQueryInterface;
use App\Core\Models\User\Role;
use App\Core\Models\User\User;
use App\Core\Models\User\UserId;
use App\Core\Repository\ProductRepositoryInterface;
use App\Infrastructure\Query\MySQL\SellerAccountQuery;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function __construct(
        private SellerAccountQueryInterface $sellerAccountQuery,
        private ProductRepositoryInterface $productRepository,
    )
    {

    }

    public function index()
    {
        $user = new User(
            new UserId("3cdab866-1015-11ee-be56-0242ac120002"),
            "DuffAldri Ganteng",
            "dup@mail.com",
            "123qwe123",
            new Role("s")
        );
        $seller = $this->sellerAccountQuery->execute($user->getUserId());
        $products = $this->productRepository->showByUserId($user->getUserId());

        return view('seller.main', [
            'seller' => $seller,
            'products' => $products
        ]);
    }
}
